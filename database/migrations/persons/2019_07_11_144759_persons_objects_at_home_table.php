<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsObjectsAtHomeTable extends Migration
{
    // CREATE TABLE ObjectsatHome(
    //     ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
    //      ON UPDATE CASCADE
    //      ON DELETE CASCADE,
    //      SpecificObjects VARCHAR(15) NOT NULL,
    //      OthersSpecify VARCHAR(30)

    //      CONSTRAINT PK_ObjatHome FOREIGN  KEY(ID) REFERENCES Persons,
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_objects_at_home', function (Blueprint $table) {
            $table->int('id')->primary();
            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('SpecificObjects', 30)->nullable(false);
            $table->string('OthersSpecify', 20);
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
        Schema::dropIfExists('persons_objects_at_home');
    }
}
