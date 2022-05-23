<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use Illuminate\Support\Arr;

class Number extends Model
{
    use HasFactory;

    protected $table = 'numbers';
	protected $guarded = ['*'];

    const STATUS_WAITING = 1;
	const STATUS_USED = 0;
    const STATUS_IGNORE = 3;

    protected $status = [
		1 => [
			'name' => 'Đang chờ',
			'class' => 'fas fa-circle active',
		],
		0 => [
			'name' => 'Đã sử dụng',
			'class' => 'fas fa-circle inactive',
		],
        3 => [
			'name' => 'Bỏ qua',
			'class' => 'fas fa-circle ignore',
		],
	];

    public function getStatus() {
		return Arr::get($this->status, $this->num_status, '[N\A]');
	}

    public function service()
    {
        return $this->hasOne(Service::class, 'num_service_id', 'id');
    }
}
