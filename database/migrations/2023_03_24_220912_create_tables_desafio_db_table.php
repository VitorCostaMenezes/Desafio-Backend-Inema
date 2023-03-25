<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesDesafioDbTable extends Migration
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
            $table->string('name', 100);
            $table->string('image', 100);
            $table->integer('amount');
            $table->float('valor');
            $table->text('description', 200);
        });



        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('telefone', 16);
            $table->timestamp('date');
        });

        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->string('rua', 100);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('numero', 10);
            $table->string('estado', 5);
            $table->foreignId('client_id')->references('id')->on('clients');
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->float('valor');
            $table->timestamp('date')->useCurrent();
            $table->foreignId('client_id')->references('id')->on('clients');
        });

        Schema::create('order_products', function (Blueprint $table) {
            $table->foreignId('order_id')->references('id')->on('orders');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->integer('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('order_products', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropForeign(['order_id']);
        });
        
        Schema::dropIfExists('order_products');

        Schema::dropIfExists('products');

        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['client_id']);
        });

        Schema::dropIfExists('orders');

        Schema::table('adresses', function (Blueprint $table) {
            $table->dropForeign(['client_id']);
        });
        
        Schema::dropIfExists('adresses');

        Schema::dropIfExists('clients');
       
    }
}
