<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->string('subjectName', 12);
            $table->string('subjectCode', 6)->nullable(false);
            $table->string('subjectCSubjectDescriptionode', 30)->nullable(false);
            $table->integer('subjectCredit');
            $table->timestamps();

            $table->index(['subjectName', 'subjectCode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
