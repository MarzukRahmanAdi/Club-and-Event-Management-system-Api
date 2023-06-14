<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $location
 * @property string $name
 * @property string $Image_links
 * @property int $user_id
 * @property Carbon $date
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Event extends Model
{
	protected $table = 'event';

	protected $casts = [
		'user_id' => 'int',
		'date' => 'datetime'
	];

	protected $fillable = [
		'location',
		'name',
		'Image_links',
		'user_id',
		'date'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
