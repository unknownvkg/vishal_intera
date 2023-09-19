<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    use HasFactory;
    
	protected $table='contractor_details';
    public $timestamps = false;    
    // protected $fillable = ['full_name'];

    protected $fillable = ['full_name','contractor_email','contractor_password','contractor_gender','contractor_phone','contractor_age','contractor_experience_year','contractor_country','contractor_state','contractor_city','contractor_pincode','contractor_complete_address','contractor_aadharNo','contractor_panNo','contractor_profile','registrationDate','updated_by','created_at','updated_at','updated_at'];
    

}
