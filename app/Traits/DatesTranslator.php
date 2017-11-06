<?php 

namespace App\Traits;

use Jenssegers\Date\Date;

trait DatesTranslator
{
	public function getCreatedAtAttribute($created_at)
	{
		return new Date($created_at);
	}
	public function getUpdatedAtAttribute($updated_at)
	{
		return new Date($updated_at);
	}
	public function getDayAttribute($day)
	{
		return new Date($day);
	}
	public function getDateAttribute($date)
	{
		return new Date($date);
	}
	public function getBirthdateAttribute($birthdate)
	{
		return new Date($birthdate);
	}
}

