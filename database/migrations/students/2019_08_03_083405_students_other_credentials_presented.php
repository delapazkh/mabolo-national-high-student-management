<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsOtherCredentialsPresented extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_other_credentials_presented', function (Blueprint $table) {
            $table->integer('id')->primay();;
            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->string('peptPasser', 255)->nullable(true);
            $table->string('peptPasserRating', 255)->nullable(true);
            $table->string('ALS_A_and_E_passer', 255)->nullable(true);
            $table->string('ALS_A_and_E_passerRating', 255)->nullable(true);
            $table->string('others', 255)->nullable(true);
            $table->string('othersSpecify', 255)->nullable(true);
            $table->date('dateExaminationOrAssesment', 255)->nullable(true);
            $table->string('nameAddressTestingCenter', 255)->nullable(true);
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
        Schema::dropIfExists('students_other_credentials_presented');
    }
}
