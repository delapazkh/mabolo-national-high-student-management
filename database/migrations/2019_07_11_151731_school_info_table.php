<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchoolInfoTable extends Migration
{
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

            $table->string('districtName', 30)->nullable(false);
            $table->foreign('districtName')->references('districtName')->on('districts')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('divisionName', 30)->nullable(false);
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
