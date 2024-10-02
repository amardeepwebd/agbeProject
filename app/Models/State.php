<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    // Specify the table name if it differs from the plural form of the model
    protected $table = 'states'; // Assuming the table name is 'states'

    // Define the relationship with the City model
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    // Define the inverse relationship with the Country model
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
