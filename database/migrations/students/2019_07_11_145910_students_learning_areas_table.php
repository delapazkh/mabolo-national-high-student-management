<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsLearningAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_learning_areas', function (Blueprint $table) {
            $table->integer('id')->nullable(false);
            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('learningAreaName', 15)->nullable(false);
            $table->foreign('learningAreaName')->references('learningAreaName')->on('learning_areas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('subjectName', 12)->nullable(false);
            $table->foreign('subjectName')->references('subjectName')->on('subjects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->float('QuaterlyRating');
            $table->float('FinalRating');
            $table->float('GeneralAverage');
            $table->string('Remarks', 120);
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
        Schema::dropIfExists('students_learning_areas');
    }
}
