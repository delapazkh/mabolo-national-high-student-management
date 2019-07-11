<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsMotherSStudentAliveTable extends Migration
{
    
    // CREATE TABLE Mother_s_StudentAlive(

    //     ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
    //     ON UPDATE CASCADE
    //     ON DELETE CASCADE,
    //     CONSTRAINT PK_MotherStud PRIMARY KEY(ID),

    //     MotherDOB DATETIME NOT NULL,
    //     Religion VARCHAR(15) NOT NULL,
    //     Occupation VARCHAR(20) NOT NULL,
    //     MonthlyIncome MONEY NOT NULL,
    //     EducationLevel  VARCHAR(15) FOREIGN KEY (EducationLevel) REFERENCES EducationLevel
    //     ON UPDATE CASCADE
    //     ON DELETE CASCADE,
    //     CONSTRAINT Edu_MotherStud FOREIGN KEY(EducationLevel) REFERENCES EducationLevel,
        
    //     Grade FLOAT NOT NULL
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_mother_s_student_alive', function (Blueprint $table) {
            $table->int('id');

            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->date('fatherDOB')->nullable(false);
            $table->string('religion', 15)->nullable(false);
            $table->string('occupation', 20)->nullable(false);
            $table->decimal('monthlyIncome', 15,2)->nullable(false);
            
            $table->string('educationLevel', 15)->nullable(false);
            $table->foreign('educationLevel')->references('educationLevel')->on('education_level')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->float('grade')->nullable(false);
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
