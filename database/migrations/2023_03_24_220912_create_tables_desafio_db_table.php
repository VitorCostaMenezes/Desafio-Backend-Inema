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
            $table->text('description', 200);
            $table->timestamps();
        });

        Schema::create('adress', function (Blueprint $table) {
            $table->id();
            $table->string('rua', 100);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->string('numero', 10);
            $table->string('estado', 5);
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('telefone', 16);
            $table->timestamp('date');
            $table->foreignId('adress_id')->references('id')->on('adress');
        });

        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->float('valor');
            $table->timestamp('date')->useCurrent();
            $table->foreignId('client_id')->references('id')->on('clients');
        });

        Schema::create('order_products', function (Blueprint $table) {
            $table->foreignId('order_id')->references('id')->on('order');
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
        // Schema::table('clients', function (Blueprint $table) {
        //     $table->foreignId('adress_id')
        //     ->constrained()
        //     ->onDelete('cascade');
        // });

        // Schema::table('order', function (Blueprint $table) {
        //     $table->foreignId('client_id')
        //     ->constrained()
        //     ->onDelete('cascade');
        // });

        // Schema::table('order_products', function (Blueprint $table) {
        //     $table->foreignId('order_id')
        //     ->constrained()
        //     ->onDelete('cascade');
        // });

        // Schema::table('order_products', function (Blueprint $table) {
        //     $table->foreignId('product_id')
        //     ->constrained()
        //     ->onDelete('cascade');
        // });

        // Schema::table('order_products', function (Blueprint $table) {
        //     $table->foreignId('product_id')
        //     ->constrained()
        //     ->onDelete('no action');
        // });
        // Schema::dropIfExists('products');



        Schema::dropIfExists('adress');
        Schema::dropIfExists('clients');
        Schema::dropIfExists('order');
        Schema::dropIfExists('order_products');
    }
}
