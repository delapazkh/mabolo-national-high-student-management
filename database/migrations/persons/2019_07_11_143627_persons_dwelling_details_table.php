<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsDwellingDetailsTable extends Migration
{

    // CREATE TABLE DwellingDetails(
    //      ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
    //      ON UPDATE CASCADE
    //      ON DELETE CASCADE,
    //      DwellingPlaceDesc  VARCHAR(20) NOT NULL,    
    //      OthersSpecify VARCHAR (20)

    //      CONSTRAINT PK_StudDwelPl PRIMARY KEY (ID),
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_dwelling_details', function (Blueprint $table) {
            $table->int('id')->primary();
            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('DwellingPlaceDesc', 20)->nullable(false);
            $table->string('OthersSpecify', 20);
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
        Schema::dropIfExists('persons_dwelling_details');
    }
}
