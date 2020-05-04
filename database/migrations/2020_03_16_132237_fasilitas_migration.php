<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FasilitasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('fasilitas', function (Blueprint $table) {             
            $table->increments('id_fasilitas');             
            $table->string('fasilitas1',255);             
            $table->string('fasilitas2', 255);             
            $table->string('fasilitas3', 255);
            $table->string('fasilitas4', 255);
            $table->string('fasilitas5', 255);
            $table->string('fasilitas6', 255);
            $table->string('fasilitas7', 255);
            $table->string('fasilitas8', 255);  
            $table->string('fasilitas9', 255);
            $table->string('fasilitas10', 255);
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
         Schema::dropIfExists('fasilitas'); 
    }
}
