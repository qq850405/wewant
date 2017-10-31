<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::dropIfExists('feedback');
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('feedbackNo');
            $table->string('projectNo');
            $table->string('feedbackName');
            $table->string('icon');
            $table->string('des');
            $table->string('price');
            $table->string('sentDate');
            $table->string('sentMethod');
            $table->string('upperLimit');
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
        Schema::dropIfExists('feedback');
    }
}
