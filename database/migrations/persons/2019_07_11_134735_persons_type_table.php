<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsTypeTable extends Migration
{
    
    // CREATE TABLE PersonType (

    //     ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
    //     ON UPDATE CASCADE
    //     ON DELETE CASCADE,
    //     CONSTRAINT  PK_PersonType PRIMARY KEY  (ID),

    //     PersonTypeDescription VARCHAR (10)
    //  )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_type', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('personTypeDescription', 30);

            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
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
        Schema::dropIfExists('persons_type');
    }
}
