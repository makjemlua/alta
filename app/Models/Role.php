<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Role extends Model
{
    use HasFactory,HasRoles;

    protected $table = 'roles';
	protected $guarded = ['*'];
    protected $fillable = ['name','guard_name','description','created_at','updated_at'];
}
