<?php

namespace App\Models\Dashboard;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Authenticatable
{
	use HasFactory;

	protected $table = 'company';
	protected $guarded = [];
	public $timestamps = true;
	const STATUS = ['Active', 'Not Active'];
	public static function generateRandomPassword($length)
	{
		$numbers = '0123456789';
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$charts = '!@#$%_^&*+=-?/';
		$randString = '';
		for ($i = 0; $i < $length / 2; $i++) {
			$randString .= $characters[rand(0, strlen($characters) - 1)];
		}
		for ($i = 0; $i < $length / 2; $i++) {
			$randString .= $numbers[rand(0, strlen($numbers) - 1)];
		}
		for ($i = 0; $i < $length / 2; $i++) {
			$randString .= $charts[rand(0, strlen($charts) - 1)];
		}

		return $randString;
	}
	protected $hidden = [
		'password', 'remember_token',
	];
}
