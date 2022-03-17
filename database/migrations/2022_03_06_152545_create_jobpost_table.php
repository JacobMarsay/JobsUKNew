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
        Schema::create('jobpost', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_title');
            $table->longText('job_description');
            $table->string('salary');
            $table->string('commute_type');
            $table->string('contract_type');
            $table->timestamps();

            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')
                ->references('id')
                ->on('company')
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
        Schema::dropIfExists('jobpost');
    }
};
