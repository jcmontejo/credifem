<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LatePayments extends Model
{
    
	public $table = "late_payments";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "late_number",
	    "late_ammount",
	    "late_payment",
	    "status",
	    "payment_id",
	    "debt_id"
	];

	public static $rules = [
	    "late_payment" => "required"
	];

	public function payment()
	{
		return $this->belongsTo('App\Models\Payment');
	}
	

}
