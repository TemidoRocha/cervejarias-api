<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCervejariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cervejarias', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('slug');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('website')->nullable();
            
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
        Schema::dropIfExists('cervejarias');
    }
}
