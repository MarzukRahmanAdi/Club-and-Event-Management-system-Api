<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Member
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $name
 * @property string $position
 * @property string $link
 * @property int $order
 * @property int $user_id
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Member extends Model
{
	protected $table = '_member';

	protected $casts = [
		'order' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'name',
		'position',
		'link',
		'order',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
