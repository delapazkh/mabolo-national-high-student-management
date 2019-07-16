<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->string('districtName', 30)->nullable(false);
            $table->foreign('districtName')->references('districtName')->on('districts')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('municipalityName', 15)->nullable(false)->unique();
            $table->timestamps();

            $table->index(['districtName']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipalities');
    }
}
