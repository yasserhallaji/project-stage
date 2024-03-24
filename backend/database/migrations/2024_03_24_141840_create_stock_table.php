<?php
// database/migrations/{timestamp}_create_stock_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockTable extends Migration
{
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->id();
            $table->date('date_commande');
            $table->integer('ammonix');
            $table->integer('tovex');
            $table->integer('detos_500ms');
            $table->integer('raccord_17');
            $table->integer('raccord_25');
            $table->integer('raccord_42');
            $table->integer('raccord_65');
            $table->integer('raccord_100');
            $table->integer('lign');
            $table->integer('aei');
            $table->string('etat_cout');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stock');
    }
}
