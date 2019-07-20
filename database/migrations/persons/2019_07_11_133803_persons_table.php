<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('student_id', 100);
            $table->string('lastName', 30)->nullable(false);
            $table->string('givenName', 20)->nullable(false);
            $table->string('middleName', 10)->nullable(false);
            $table->date('birthDate')->nullable(false);
            $table->string('civilStatus', 10)->nullable(true);
            $table->string('gender', 10)->nullable(true);
            $table->string('bloodGroup', 3)->nullable(true);
            $table->string('religion', 15)->nullable(true);
            $table->string('address', 255)->nullable(true);
            $table->date('enrollmentDate')->useCurrent();
            $table->timestamps();

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
        Schema::dropIfExists('persons');
    }
}
