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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description', 660);
            $table->string('responsibility', 660);
            $table->string('qualifications', 660);
            $table->string('benefits', 660);
            $table->integer('salary');
            $table->string('company');
            $table->integer('location_id');
            $table->integer('type_id');
            $table->integer('language_id');
            $table->string('logo_path')->default('default.jpeg');
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
        Schema::dropIfExists('jobs');
    }
};
