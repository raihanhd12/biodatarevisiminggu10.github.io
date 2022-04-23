<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaihanAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raihan_admins', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('nama');
            $table->string('namaPanggilan');
            $table->string('ttl');
            $table->string('jk');
            $table->string('umur');
            $table->string('hobi');
            $table->string('agama');
            $table->string('email');
            $table->string('username');
            $table->string('password');
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
        Schema::dropIfExists('raihan_admins');
    }
}
