<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',256);
            $table->string('form',128);
            $table->longText('description')->default("");
            $table->longText('restriction')->default("");
            $table->boolean('FK1')->default(false);
            $table->boolean('FK2')->default(false);
            $table->boolean('FK3')->default(false);
            $table->bigInteger('price');
            $table->unsignedBigInteger('category_id');
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
        Schema::dropIfExists('products');
    }
}
