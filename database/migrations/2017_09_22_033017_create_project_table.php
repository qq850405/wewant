<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::dropIfExists('project');
        Schema::create('project', function (Blueprint $table) {
            $table->increments('projectNo')->unique();
            $table->string('projectName');
            $table->string('category');
            $table->string('title');
            $table->string('id');
            $table->string('introduction');
            $table->string('detail');
            $table->string('pic_path');
            $table->integer('goals');
            $table->string('status');
            $table->string('begin_time');
            $table->string('end_time');
            $table->string('owner');
            $table->string('phone');
            $table->string('identity');
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
        Schema::dropIfExists('project');
    }
}
