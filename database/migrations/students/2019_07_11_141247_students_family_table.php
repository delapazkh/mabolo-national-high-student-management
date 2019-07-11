<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsFamilyTable extends Migration
{

    // CREATE TABLE StudentFamily (
    //     ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
    //     ON UPDATE CASCADE
    //     ON DELETE CASCADE,
    //     Father_s_Name VARCHAR(50)  NOT NULL, 
    //     Mother_s_Name VARCHAR(50) Not NULL,
    //     Deceased VARCHAR(3) DEFAULT 'YES'
        
    //    CONSTRAINT PK_StudFami PRIMARY KEY  (ID)
    // ) 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_family', function (Blueprint $table) {
            $table->integer('id')->primay();
            $table->string('father_s_Name', 50)->nullable(false);
            $table->string('mother_s_Name', 50)->nullable(false);
            $table->string('deceased', 3)->default('No');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_family');
    }
}
