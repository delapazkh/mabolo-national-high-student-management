<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsFatherSStudentAliveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_father_s_student_alive', function (Blueprint $table) {
            $table->integer('id');

            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('lastName', 30);
            $table->string('givenName', 20);
            $table->string('middleName', 10);
            $table->string('age', 25);
            $table->string('deathStatus', 5)->nullable(false)->default('false');
            $table->date('fatherDOB')->nullable(true);
            $table->string('religion', 15)->nullable(false);
            $table->string('occupation', 20)->nullable(false);
            $table->decimal('monthlyIncome', 15,2)->nullable(false);
            $table->string('educationLevel', 35)->nullable(false);
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
        Schema::dropIfExists('persons_father_s_student_alive');
    }
}
