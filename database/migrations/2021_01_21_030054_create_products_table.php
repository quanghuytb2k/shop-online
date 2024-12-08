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
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('old_price')->nullable();
            $table->string('image')->nullable();
            $table->text('desc')->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('status')->comment('2 Chờ duyệt, 1 Công khai')->default('1');
            $table->integer('cat_id');
            $table->integer('warehouse')->nullable();
            $table->integer('sold')->nullable();
            $table->string("creator")->nullable();
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
