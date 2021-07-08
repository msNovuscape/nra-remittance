<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExecutiveCommitteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executive_committees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('designation');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('image_path')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('executive_committees');
    }
}
