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

            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('author_id')->unsigned()->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->double('price');
            $table->bigInteger('quantity')->default('0');
            $table->double('discount')->nullable();
            $table->double('weight')->nullable();
            $table->string('sku')->nullable();
            $table->boolean('featured')->default('0');
            $table->string('tag')->nullable();

            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('author_id')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');

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
