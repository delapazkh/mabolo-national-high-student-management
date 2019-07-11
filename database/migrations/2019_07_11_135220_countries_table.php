<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CountriesTable extends Migration
{

    // CREATE TABLE  Countries(
    //     CountryName VARCHAR (12),
    //     CountryCode VARCHAR(2) NOT NULL,
    //     Nationality VARCHAR(15) NOT NULL

    //     CONSTRAINT PK_Country PRIMARY KEY (CountryName),
    //     CONSTRAINT UC_CountryCode UNIQUE (CountryCode),

    //     INDEX Country(CountryName, CountryCode)
    // )
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->string('countryName', 12)->primary();
            $table->string('countryCode', 2)->nullable(false)->unique();
            $table->string('nationality', 15)->nullable(false);
            $table->timestamps();

            $table->index(['countryName', 'countryCode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
