<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Device;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service';
	protected $guarded = ['*'];
    
    protected $fillable = [
        'se_name',
        'se_code',
        'se_describe',
    ];
}
