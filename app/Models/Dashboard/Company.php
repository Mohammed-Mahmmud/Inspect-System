<?php

namespace App\Models\Dashboard;

use App\Models\Dashboard\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class Company extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable, HasRoles;

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

	public function orders()
	{
		return $this->hasMany(Order::class, 'company_id');
	}
	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];
}
