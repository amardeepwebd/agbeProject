<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id(); // Primary key (unsignedBigInteger)
            $table->string('name');
            $table->timestamps();
        });
        
        // Set the engine explicitly to InnoDB
        DB::statement('ALTER TABLE countries ENGINE = InnoDB');
    }

    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
