<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id(); // Primary key (unsignedBigInteger)
            $table->string('name');
            $table->unsignedBigInteger('state_id'); // Foreign key (unsignedBigInteger)
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
        });

        // Set the engine explicitly to InnoDB
        DB::statement('ALTER TABLE cities ENGINE = InnoDB');
    }

    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
