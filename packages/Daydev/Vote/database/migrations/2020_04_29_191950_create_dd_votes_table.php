<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDdVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dd_votes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('voted_id');
            $table->string('voted_type');
            $table->integer('value');
            $table->unsignedInteger('voter_id');
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
        Schema::dropIfExists('dd_votes');
    }
}
