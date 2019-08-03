<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsEligibilityForJhsEnrollment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_eligibility_for_jhs_enrollment', function (Blueprint $table) {
            $table->integer('id')->primay();;
            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('elementarySchoolCompleter', 255)->nullable(true);
            $table->string('generalAverage', 255)->nullable(true);
            $table->string('citation', 255)->nullable(true);
            $table->string('nameOfElementarySchool', 255)->nullable(true);
            $table->string('schoolID', 255)->nullable(true);
            $table->string('addressOfSchool', 255)->nullable(true);
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
        Schema::dropIfExists('students_eligibility_for_jhs_enrollment');
    }
}
