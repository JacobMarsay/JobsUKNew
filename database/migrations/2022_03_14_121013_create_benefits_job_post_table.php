<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefits_job_post', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('benefits_id')->unsigned();
            $table->foreign('benefits_id')
                ->references('id')
                ->on('benefits')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->integer('job_post_id')->unsigned();
            $table->foreign('job_post_id')
                ->references('id')
                ->on('jobpost')
                ->onUpdate('cascade')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('benefits_job_post');
    }
};
