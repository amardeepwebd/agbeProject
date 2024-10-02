<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id(); // Primary key (unsignedBigInteger)
            $table->string('name');
            $table->unsignedBigInteger('country_id'); // Foreign key (unsignedBigInteger)
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });

        // Set the engine explicitly to InnoDB
        DB::statement('ALTER TABLE states ENGINE = InnoDB');
    }

    public function down()
    {
        Schema::dropIfExists('states');
    }
}
