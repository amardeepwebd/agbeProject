<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    // Specify the table name if it differs from the plural form of the model
    protected $table = 'cities'; // Assuming the table name is 'cities'

    // Define the inverse relationship with the State model
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
