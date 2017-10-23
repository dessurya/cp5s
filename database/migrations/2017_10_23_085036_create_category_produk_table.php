<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amd_category_produk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->text('description');
            $table->string('img_category');
            $table->string('slug')->unique();
            $table->string('flug_publish')->default('N');
            $table->string('flug_home')->default('N');
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
        Schema::dropIfExists('amd_category_produk');
    }
}
