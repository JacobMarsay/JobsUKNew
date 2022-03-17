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
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street_name');
            $table->integer('house_number');
            $table->string('postcode');
            $table->string('city');
            $table->string('county');
            
            $table->integer('job_seeker_id')->nullable()->unsigned();
            $table->foreign('job_seeker_id')
                ->references('id')
                ->on('jobseeker')
                ->onDelete('cascade');
            $table->integer('company_id')->nullable()->unsigned();
            $table->foreign('company_id')
                ->references('id')
                ->on('company')
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
        Schema::dropIfExists('address');
    }
};
