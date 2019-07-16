<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsAcademicHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_academic_history', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->float('previousGrade')->nullable(false);
            $table->string('lastSchoolAttended', 20)->nullable(false);
            $table->string('schoolYear', 12)->nullable(false);
            $table->timestamps();

            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_academic_history');
    }
}
