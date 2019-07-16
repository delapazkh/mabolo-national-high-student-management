<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsGuardianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_gaurdian', function (Blueprint $table) {
            $table->integer('id')->primay();
            $table->string('occupation', 30);
            $table->string('phoneNumber', 15);
            $table->string('lastName', 30);
            $table->string('givenName', 20);
            $table->string('middleName', 10);
            $table->string('guardianRelationShip', 15);
            $table->string('memberof4P_S', 3)->default('NO');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->index(['lastName', 'givenName']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_gaurdian');
    }
}
