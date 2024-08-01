<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Company extends Authenticatable
{
	use HasFactory, HasApiTokens, Notifiable, HasRoles;

	protected $table = 'company';
	protected $guarded = [];
	public    $timestamps = true;
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
		'password',
		'remember_token',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];
}
