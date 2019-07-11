<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsDirectionTable extends Migration
{

    // CREATE TABLE Direction(

    //     ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
    //     ON UPDATE CASCADE
    //     ON DELETE CASCADE,
    //     CountryName VARCHAR(12) NOT NULL  FOREIGN KEY(CountryName) REFERENCES Countries 
    //     ON UPDATE CASCADE
    //     ON DELETE CASCADE, 
    //     DirectionAddress VARCHAR(120) NOT NULL,

    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_direction', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('countryName', 12)->nullable(false);
            $table->string('directionAddress', 120)->nullable(false);

            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('countryName')->references('countryName')->on('countries')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons_direction');
    }
}
