<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {             
            $table->increments('id_admin');             
            $table->string('nama_admin',50);             
            $table->string('username', 30);             
            $table->string('password', 30);
            $table->integer('no_hp');
            $table->string('foto', 50);
            $table->string('level', 10);
                      
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin'); 
    }
}
