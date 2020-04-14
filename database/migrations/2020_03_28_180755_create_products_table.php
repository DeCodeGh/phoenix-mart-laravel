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
      $table->uuid('id')->nullable()->default(null);
      $table->string('name');
      $table->string('category');
      $table->integer('price')->unsigned()->nullable();
      $table->integer('stock')->unsigned()->nullable();
      $table->boolean('in_stock')->nullable()->default(false);
      $table->string('images')->nullable();
      $table->text('description')->nullable();
      $table->string('variation')->nullable();
      $table->timestamps();
      $table->primary('id');
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
