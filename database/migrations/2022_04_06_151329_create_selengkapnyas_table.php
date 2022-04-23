<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelengkapnyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selengkapnyas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('nama');            
            $table->string('ttl');            
            $table->string('jk');
            $table->string('umur');
            $table->string('hobi');
            $table->string('agama');
            $table->string('email');
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
        Schema::dropIfExists('selengkapnyas');
    }
}
