<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Specify the table name if it differs from the plural form of the model
    protected $table = 'users'; // Assuming the table name is 'users'

    // Fillable fields for mass assignment
    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'email',
        'mobile',
        'password',
        'country_id',
        'state_id',
        'city_id',
        'locality',
        'pincode',
    ];

    // Hidden fields (don't show these when converting the model to an array)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relationships
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
