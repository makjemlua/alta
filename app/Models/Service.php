<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use App\Models\Number;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service';
	protected $guarded = ['*'];
    
    const STATUS_ACTIVE = 1;
	const STATUS_INACTIVE = 0;


	protected $active = [
		1 => [
			'name' => 'Hoạt động',
			'class' => 'fas fa-circle active',
		],
		0 => [
			'name' => 'Ngưng hoạt động',
			'class' => 'fas fa-circle inactive',
		],
	];

	public function getStatus() {
		return Arr::get($this->active, $this->se_active, '[N\A]');
	}

	public function number()
    {
        return $this->belongsTo(Number::class, 'id', 'num_service_id');
    }
}
