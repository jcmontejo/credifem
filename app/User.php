<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Traits\DatesTranslator; 

class User extends Authenticatable
{   
    use EntrustUserTrait, DatesTranslator; // add this trait to your user model
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    "name",
    "email", 
    "password",
    "mother_last_name",
    "father_last_name",
    "birthdate",
    "birth_entity",
    "place_of_birth",
    "gender",
    "civil_status",
    "country_of_birth",
    "nationality",
    "scholarship",
    "phone_1",
    "phone_2",
    "avatar",
    "branch_id",
    "region_id"
    ];

    public static $rules = [
    "name" => "required",
    "email" => "required",
    "mother_last_name" => "required",
    "father_last_name" => "required",
    "birthdate" => "required",
    "birth_entity" => "required",
    "place_of_birth" => "required",
    "gender" => "required",
    "civil_status" => "required",
    "country_of_birth" => "required",
    "nationality" => "required",
    "scholarship" => "required",
    "phone_1" => "required",
    "phone_2" => "required",
    "branch_id",
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];

    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }

    public function location()
    {
        return $this->hasOne('App\Models\Employeelocation');
    }

    public function credential()
    {
        return $this->hasOne('App\Models\Employeecredentials');
    }
    public function clients()
    {
        return $this->hasMany('App\Models\Client');
    }
    public function credits()
    {
        return $this->hasMany('App\Models\Credit');
    }
    public function payments()
    {
        return $this->hasMany('App\Models\Payment');       
    }

    public function vault()
    {
        return $this->hasOne('App\Models\Vault');
    }
     public function boxcut()
    {
        return $this->hasOne('App\Models\BoxCut');
    }
    public function purseAccess()
    {
        return $this->hasOne('App\Models\PurseAccess');
    }

    public function closes()
    {
        return $this->hasMany('App\Models\Close');       
    }
    public function investments()
    {
        return $this->hasMany('App\Models\Investment');       
    }
    public function retreats()
    {
        return $this->hasMany('App\Models\Retreat');       
    }
}
