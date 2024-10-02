<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    // Specify the table name if it differs from the plural form of the model
    protected $table = 'countries'; // Assuming the table name is 'countries'

    // Define the relationship with the State model
    public function states()
    {
        return $this->hasMany(State::class);
    }
}
