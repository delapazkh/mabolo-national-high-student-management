<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LearningAreasTable extends Migration
{

    // CREATE TABLE LearningAreas(
    //     LearningAreaCode VARCHAR(6) NOT NULL,
    //     LearningAreaName VARCHAR(15) NOT NULL,
    //     AreaDescription VARCHAR(20)
        
    //     CONSTRAINT PK_LearnArea PRIMARY KEY(LearningAreaName),
    //     CONSTRAINT UC_AreaName  UNIQUE (LearningAreaName),

    //     INDEX Index_AreaName (LearningAreaName, LearningAreaCode)
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_areas', function (Blueprint $table) {
            $table->string('learningAreaCode', 6)->nullable(false);
            $table->string('learningAreaName', 15)->nullable(false)->primary()->unique();
            $table->string('areaDescription', 20);
            $table->timestamps();

            $table->index(['learningAreaName', 'learningAreaCode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learning_areas');
    }
}
