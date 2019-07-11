<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchoolInfoTable extends Migration
{
    
    // CREATE TABLE SchoolInfo(
    //     SchoolName VARCHAR(30) NOT NULL,
    //     SchoolID VARCHAR(15)
    //     CONSTRAINT UC_SchoolID UNIQUE (SchoolID),
    //     SchoolAddress VARCHAR(120),
    //     RegionNumber VARCHAR(15) NOT NULL
    //     CONSTRAINT FK_RegionSchool FOREIGN KEY (RegionNumber) REFERENCES Regions
    //     ON DELETE CASCADE
    //     on UPDATE CASCADE,

    //     DistrictName VARCHAR(30) NOT NULL
    //     CONSTRAINT FK_DistrictSchool FOREIGN KEY (DistrictName) REFERENCES Districts
    //     ON UPDATE CASCADE
    //     ON DELETE CASCADE,

    //     DivisionName VARCHAR(20) NOT NULL
    //     CONSTRAINT FK_DivisionSchool FOREIGN KEY (DivisionName) REFERENCES Divisions
    //     ON UPDATE CASCADE
    //     ON DELETE CASCADE,
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_info', function (Blueprint $table) {
            $table->string('schoolName', 20)->nullable(false);
            $table->string('schoolID', 15);
            $table->string('schoolAddress', 120);

            $table->string('regionNumber', 15)->nullable(false);
            $table->foreign('regionNumber')->references('regionNumber')->on('regions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('districtName', 15)->nullable(false);
            $table->foreign('districtName')->references('districtName')->on('districts')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('divisionName', 15)->nullable(false);
            $table->foreign('divisionName')->references('divisionName')->on('divisions')
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
        Schema::dropIfExists('school_info');
    }
}
