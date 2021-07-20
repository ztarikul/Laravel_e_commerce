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
            $table->string('name');
            $table->string('description');
            $table->string('content');
            $table->text('image_1');
            $table->text('image_2');
            $table->text('image_3');
            $table->text('image_4');
            $table->float('price');
            $table->integer('quantity');
            $table->foreignId('hot_deal')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('special_offer')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('collection')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
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
