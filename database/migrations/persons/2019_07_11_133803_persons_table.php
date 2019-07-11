<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsTable extends Migration
{
    // CREATE TABLE Persons(

    //         ID INT, 
    //         LastName VARCHAR(30) NOT NULL,
    //         GivenName VARCHAR(20) NOT NULL,
    //         MiddleName VARCHAR(10) NOT NULL,
    //         BirthDate DATETIME NOT NULL,
    //         CivilStatus VARCHAR(10) NOT NULL,
    //         Genre VARCHAR(10) NOT NULL,
    //         BloodGroup VARCHAR(3) NOT NULL,
    //         Religion VARCHAR(15) NOT NULL,

    //         EnrollmentDate DATETIME2 DEFAULT 'GETDDATE'


    //         CONSTRAINT  PK_Persons PRIMARY KEY  (ID),

    //         INDEX LastGiven (LastName, GivenName),
    //     )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('lastName', 30)->nullable(false);
            $table->string('givenName', 20)->nullable(false);
            $table->string('middleName', 10)->nullable(false);
            $table->date('birthDate')->nullable(false);
            $table->string('civilStatus', 10)->nullable(false);
            $table->string('genre', 10)->nullable(false);
            $table->string('bloodGroup', 3)->nullable(false);
            $table->string('religion', 15)->nullable(false);
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
