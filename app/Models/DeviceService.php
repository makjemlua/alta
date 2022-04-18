<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceService extends Model
{
    use HasFactory;

    protected $table = 'device_service';
	protected $guarded = ['*'];
    
    protected $fillable = [
        'device_id',
        'service_id',
    ];
}
