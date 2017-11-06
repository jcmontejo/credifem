<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use App\Traits\DatesTranslator;

class Expenditure extends Model
{	
	//use DatesTranslator;
    
	public $table = "expenditures";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "ammount",
		"concept",
		"voucher",
		"date",
		"description",
		"credit_id",
		"vault_id"
	];

	public static $rules = [
	    "ammount" => "required",
		"concept" => "required",
		"voucher" => "required",
		"description" => "required"
	];

	public function vault()
	{
		return $this->belongsTo('App\Models\Vault');
	}
	
}
