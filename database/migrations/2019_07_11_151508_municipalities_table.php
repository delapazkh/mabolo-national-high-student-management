<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MunicipalitiesTable extends Migration
{
        
    // CREATE TABLE Municipalities(
    //     DistrictName VARCHAR(30) NOT NULL,
    //     CONSTRAINT PF_DistMunici FOREIGN KEY(DistrictName) REFERENCES Districts,
    //     MunicipalityName VARCHAR(15) NOT NULL
    //     INDEX Index_Municipality(DistrictName, MunicipalityName)
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->string('regionNumber', 15)->nullable(false)->default('REGION VII');
            $table->string('regionDescription', 30)->nullable(false);
            $table->timestamps();

            $table->index(['regionNumber']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipalities');
    }
}
