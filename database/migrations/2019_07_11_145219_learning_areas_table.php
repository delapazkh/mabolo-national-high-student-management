<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LearningAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_areas', function (Blueprint $table) {
            $table->string('learningAreaCode', 6)->nullable(false);
            $table->string('learningAreaName', 15)->nullable(false)->primary()->unique();
            $table->string('areaDescription', 20);
            $table->timestamps();

            $table->index(['learningAreaName', 'learningAreaCode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learning_areas');
    }
}
