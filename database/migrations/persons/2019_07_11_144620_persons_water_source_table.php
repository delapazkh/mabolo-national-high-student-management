<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsWaterSourceTable extends Migration
{

    // CREATE TABLE WaterSource(

    //      ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
    //      ON UPDATE CASCADE
    //      ON DELETE CASCADE,
    //       WaterSourceDesc VARCHAR(30) NOT NULL,
    //      OthersSpecify VARCHAR(20)

    //      CONSTRAINT PK_StudWatSource PRIMARY KEY(ID),
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_water_source', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('WaterSourceDesc', 30)->nullable(false);
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
        Schema::dropIfExists('persons_water_source');
    }
}
