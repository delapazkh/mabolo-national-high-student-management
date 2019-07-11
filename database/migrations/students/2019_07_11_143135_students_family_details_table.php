<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsFamilyDetailsTable extends Migration
{
    // CREATE TABLE StudentFamilyDetails(
    //     ID INT NOT NULL FOREIGN KEY (ID) REFERENCES Persons
    //     ON UPDATE CASCADE
    //     ON DELETE CASCADE,
    //     CONSTRAINT PK_StudFamiDet PRIMARY KEY (ID),

    //     NumberofBrothers INT NOT NULL,
    //     NumberofSisters INT NOT NULL,
    //     DidBrother_SisterDroppedoutofSchool VARCHAR(3) NOT NULL,

    //     Reason VARCHAR(50),
    //     FamilyMemComOrgaAffiliated VARCHAR (3) NOT NULL DEFAULT 'NO',
    //     OrganisationName VARCHAR (15)
    // )
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_family_details', function (Blueprint $table) {
            $table->int('id');
            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->int('NumberofBrothers')->nullable(false);
            $table->int('NumberofSisters')->nullable(false);
            $table->string('DidBrother_SisterDroppedoutofSchool', 3)->nullable(false);
            $table->string('Reason', 50);
            $table->string('FamilyMemComOrgaAffiliated', 3)->nullable(false)->default('No');
            $table->string('OrganisationName', 15);
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
        Schema::dropIfExists('students_family_details');
    }
}
