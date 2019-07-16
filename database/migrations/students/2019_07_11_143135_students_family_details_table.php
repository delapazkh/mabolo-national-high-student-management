<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsFamilyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_family_details', function (Blueprint $table) {
            $table->integer('id');
            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('numberofBrothers')->nullable(false);
            $table->integer('numberofSisters')->nullable(false);
            $table->string('didBrother_SisterDroppedoutofSchool', 3)->nullable(false)->default('NO');
            $table->string('reason', 50);
            $table->string('familyMemComOrgaAffiliated', 3)->nullable(false)->default('NO');
            $table->string('organisationName', 90);
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
        Schema::dropIfExists('students_family_details');
    }
}
