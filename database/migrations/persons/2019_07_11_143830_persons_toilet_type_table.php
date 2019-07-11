<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsToiletTypeTable extends Migration
{

    // CREATE TABLE ToiletType(
    //      ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
    //      ON UPDATE CASCADE
    //      ON DELETE CASCADE,
    //      ToiletTypeDescription VARCHAR(20) NOT NULL,
    //      OthersSpecify VARCHAR(20),

    //     CONSTRAINT PK_StudToilet PRIMARY KEY(ID),
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_toilet_type', function (Blueprint $table) {
            $table->int('id')->primary();
            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('toiletTypeDescription', 20)->nullable(false);
            $table->string('othersSpecify', 20);
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
        Schema::dropIfExists('persons_toilet_type');
    }
}
