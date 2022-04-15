<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $table = 'device';
	protected $guarded = ['*'];
    
    protected $fillable = [
        'de_name',
        'de_code',
        'de_service',
    ];
}
