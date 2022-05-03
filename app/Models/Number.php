<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Number extends Model
{
    use HasFactory;

    protected $table = 'numbers';
	protected $guarded = ['*'];

    public function service()
    {
        return $this->hasOne(Service::class, 'num_service_id', 'id');
    }
}
