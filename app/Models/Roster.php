<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    
	public $table = "rosters";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "date",
		"coordinating_name",
		"coordination",
		"branch_office",
		"name_employee",
		"number_employee",
		"position",
		"payment_scheme",
		"payment_period",
		"perceptions",
		"deductions",
		"grandchild_pay",
		"coordinating_firm",
		"employee_firm",
		"user_id"
	];

	public static $rules = [
	    "date" => "required",
		"coordinating_name" => "required",
		"coordination" => "required",
		"branch_office" => "required",
		"name_employee" => "required",
		// "number_employee" => "required",
		// "position" => "required",
		"payment_scheme" => "required",
		"payment_period" => "required",
		"perceptions" => "required",
		"deductions" => "required",
		"grandchild_pay" => "required",
		"coordinating_firm" => "required",
		"employee_firm" => "required"
	];

	 public function vault()
    {
        return $this->hasOne('App\Models\Vault');
    }

}
