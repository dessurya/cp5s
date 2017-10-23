<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amd_produk', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category');
            $table->string('nama');
            $table->text('description');
            $table->string('img_produk');
            $table->string('slug')->unique();
            $table->string('flug_publish')->default('N');
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
        Schema::dropIfExists('amd_produk');
    }
}
