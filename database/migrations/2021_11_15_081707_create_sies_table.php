<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kegiatan_id');
            $table->string('nama_sie');
            $table->text('deskripsi_sie');
            $table->boolean('rekrutmen');
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
        Schema::dropIfExists('sies');
    }
}
