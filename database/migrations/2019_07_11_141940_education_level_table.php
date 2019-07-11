<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EducationLevelTable extends Migration
{

    // CREATE TABLE EducationLevel(
    //     EducationLevel  VARCHAR(15) PRIMARY KEY,
    //     EducationDescription VARCHAR(30) NOT NULL,
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_level', function (Blueprint $table) {
            $table->string('educationLevel', 15)->primary();
            $table->string('educationDescription', 30)->nullable(false);
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
        Schema::dropIfExists('education_level');
    }
}
