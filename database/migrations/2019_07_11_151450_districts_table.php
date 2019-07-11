<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DistrictsTable extends Migration
{
    // CREATE TABLE Districts(
    //     DistrictName VARCHAR(30) NOT NULL,
    //     DistrictDescription VARCHAR(30) NOT NULL
    //     CONSTRAINT PK_District PRIMARY KEY(DistrictName),
    //     INDEX IndexDistrict(DistrictName)
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->string('districtName', 30)->nullable(false)->primary();
            $table->string('districtDescription', 30)->nullable(false);
            $table->timestamps();

            $table->index(['districtName']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
}
