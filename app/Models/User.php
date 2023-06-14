<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $logo_link
 * @property string|null $cover_link
 * @property Carbon|null $established
 * @property string|null $phone
 * @property string|null $description
 * @property string|null $address
 * @property string|null $google_form_link
 * @property string|null $social_media
 * @property string|null $second_email
 * @property string|null $second_description
 * @property string|null $category
 * @property string|null $university_name
 * @property string|null $university_address
 * @property string|null $role
 * 
 * @property Collection|Member[] $members
 * @property Collection|Event[] $events
 *
 * @package App\Models
 */

 use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
	use HasFactory, Notifiable, HasApiTokens;

	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'established' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token',
		'role'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'logo_link',
		'cover_link',
		'established',
		'phone',
		'description',
		'address',
		'google_form_link',
		'social_media',
		'second_email',
		'second_description',
		'category',
		'university_name',
		'university_address',
	];

	public function members()
	{
		return $this->hasMany(Member::class);
	}

	public function events()
	{
		return $this->hasMany(Event::class);
	}
}
