<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegionsTable extends Migration
{
    // CREATE TABLE Regions(
    //     RegionNumber VARCHAR(15) DEFAULT 'REGION VII',
    //     RegionDescription VARCHAR(30) NOT NULL,
    //     CONSTRAINT PK_Region PRIMARY KEY (RegionNumber),
    //     INDEX IndexRegion (RegionNumber)
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
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
        Schema::dropIfExists('regions');
    }
}
