<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_unite', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('unite_id');
            $table->unsignedBigInteger('item_id');
            $table->foreign('unite_id')->references('id')->on('unites')->onDelete('cascade'); //外部キー参照
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade'); //外部キー参照
            $table->unique(['unite_id', 'item_id'],'uq_roles'); //Laravelは複合主キーが扱いにくいのでユニークで代用
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
        Schema::dropIfExists('item_unite');
    }
};
