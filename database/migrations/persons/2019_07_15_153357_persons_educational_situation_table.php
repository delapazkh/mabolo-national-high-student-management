<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonsEducationalSituationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_eductional_situation', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->foreign('id')->references('id')->on('persons')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->string('travelTime', 10);
            $table->string('transportation', 15);
            $table->string('homeworkSupport', 100);

            $table->string('studentAleadyDroppedOutofSchool', 3)->default('NO');
            // if yes
            $table->string('howLong', 15)->nullable(true);
            $table->string('reason', 30)->nullable(true);

            $table->string('withParents', 3)->default('YES');
            // if no
            $table->string('studentRelationship', 50)->nullable(true);

            $table->string('studentSelfSupport', 3)->default('NO');
            $table->string('studentWork', 50)->nullable(true);
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
        Schema::dropIfExists('persons_eductional_situation');
    }
}
