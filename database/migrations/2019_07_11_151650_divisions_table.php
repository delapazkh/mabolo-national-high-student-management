<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DivisionsTable extends Migration
{

    // CREATE TABLE Divisions(
    //     DivisionName VARCHAR(20),
    //     DivisionDescription VARCHAR(30) NOT NULL,
    //     CONSTRAINT PK_Division PRIMARY KEY (DivisionName),
    //     INDEX IndexDivision(DivisionName)
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->string('divisionName', 20)->primary();
            $table->string('divisionDescription', 30)->nullable(false);
            $table->timestamps();

            $table->index(['divisionName']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisions');
    }
}
