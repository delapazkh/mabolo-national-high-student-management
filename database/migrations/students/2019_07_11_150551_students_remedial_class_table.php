<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsRemedialClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_remedial_class', function (Blueprint $table) {
            $table->integer('id')->nullable(false);
            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('learningAreaName', 15)->nullable(false);
            $table->foreign('learningAreaName')->references('learningAreaName')->on('learning_areas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->date('conductedFrom')->nullable(false);
            $table->date('conductedTo')->nullable(false);
            $table->string('remClassMark', 15);
            $table->float('recomputedFinalGrade');
            $table->string('remarks', 120);
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
        Schema::dropIfExists('students_remedial_class');
    }
}
