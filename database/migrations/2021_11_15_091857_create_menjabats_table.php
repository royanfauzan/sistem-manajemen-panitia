<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenjabatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menjabats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('sie_id');
            $table->foreignId('jabatan_id');
            $table->string('status')->default('menunggu');
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
        Schema::dropIfExists('menjabats');
    }
}
