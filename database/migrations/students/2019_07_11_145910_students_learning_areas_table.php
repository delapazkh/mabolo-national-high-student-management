<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsLearningAreasTable extends Migration
{
    // CREATE TABLE Student_LearningAreas(
    //     ID INT NOT NULL 
    //     CONSTRAINT FK_PersonLearn FOREIGN KEY(ID) REFERENCES Persons
    //     ON UPDATE CASCADE
    //     ON DELETE CASCADE,
    //     LearningAreaName VARCHAR(15) NOT NULL,
    //     CONSTRAINT FK_PerAreaName FOREIGN KEY (LearningAreaName) REFERENCES LearningAreas
    //     ON UPDATE CASCADE
    //     ON DELETE CASCADE,

    //     SubjectName VARCHAR(12)
    //     CONSTRAINT FK_PerSubject FOREIGN KEY (SubjectName ) REFERENCES  Subjects 
    //     ON UPDATE CASCADE
    //     ON DELETE CASCADE,

    //     QuaterlyRating FLOAT, 
    //     FinalRating FLOAT,
    //     GeneralAverage FLOAT,
        
    //     Remarks VARCHAR(120)
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_learning_areas', function (Blueprint $table) {
            $table->int('id')->nullable(false);
            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('learningAreaName', 15)->nullable(false);
            $table->foreign('learningAreaName')->references('learningAreaName')->on('learning_areas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('subjectName', 12)->nullable(false);
            $table->foreign('subjectName')->references('subjectName')->on('subjects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->float('QuaterlyRating');
            $table->float('FinalRating');
            $table->float('GeneralAverage');
            $table->string('Remarks', 120);
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
        Schema::dropIfExists('students_learning_areas');
    }
}
