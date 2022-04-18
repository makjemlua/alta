<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

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

    public function services() {
		return $this->belongsToMany(Service::class);
	}
}
