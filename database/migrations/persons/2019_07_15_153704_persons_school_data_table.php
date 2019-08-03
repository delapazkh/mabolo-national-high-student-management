<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsSchoolDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_schooled_data', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('schooledEnrolled', 255)->nullable(true);
            $table->date('schoolDate')->nullable(true);
            $table->string('lRN', 255)->nullable(true);
            $table->string('studentStatus', 255)->nullable(true);
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
        Schema::dropIfExists('persons_schooled_data');
    }
}
