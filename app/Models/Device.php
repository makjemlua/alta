<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use App\Models\Service;

class Device extends Model
{
    use HasFactory;

    protected $table = 'device';
	protected $guarded = ['*'];

    const STATUS_ACTIVE = 1;
	const STATUS_INACTIVE = 2;

    const STATUS_CONNECT = 1;
	const STATUS_UNCONNECTED = 2;

	protected $active = [
		1 => [
			'name' => 'Hoạt động',
			'class' => 'fas fa-circle active',
		],
		2 => [
			'name' => 'Ngưng hoạt động',
			'class' => 'fas fa-circle inactive',
		],
	];

    protected $connect = [
		1 => [
			'name' => 'Kết nối',
			'class' => 'fas fa-circle active',
		],
		2 => [
			'name' => 'Mất kết nối',
			'class' => 'fas fa-circle inactive',
		],
	];
	public function getStatus() {
		return Arr::get($this->active, $this->de_active, '[N\A]');
	}

	public function getConnect() {
		return Arr::get($this->connect, $this->de_connect, '[N\A]');
	}
}
