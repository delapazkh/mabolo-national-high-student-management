<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsMotherSStudentAliveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_mother_s_student_alive', function (Blueprint $table) {
            $table->integer('id');

            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('lastName', 30);
            $table->string('givenName', 20);
            $table->string('middleName', 10);
            $table->string('deathStatus', 5)->nullable(false)->default('false');
            $table->string('age', 25)->nullable(true);
            $table->date('motherDOB')->nullable(true);
            $table->string('religion', 255)->nullable(true);
            $table->string('occupation', 255)->nullable(true);
            $table->decimal('monthlyIncome', 15,2)->nullable(true);
            $table->string('educationLevel', 35)->nullable(true);
            $table->string('skills', 10)->nullable(true);
            $table->string('course', 10)->nullable(true);
            $table->float('grade')->nullable(true);
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
        Schema::dropIfExists('persons_mother_s_student_alive');
    }
}
