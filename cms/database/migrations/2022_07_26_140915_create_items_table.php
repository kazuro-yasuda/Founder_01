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
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('medium_category_id');
            $table->string('name');
	        $table->integer('company_id');
	        $table->text('text');
	        $table->integer('current_ranking')->nullable();
	        $table->integer('price')->nullable();
	        $table->string('video_url1')->nullable();
	        $table->string('video_url2')->nullable();
	        $table->string('video_url3')->nullable();
	        $table->string('img_url_main')->nullable();
	        $table->string('img_url1')->nullable();
	        $table->string('img_url2')->nullable();
	        $table->string('img_url3')->nullable();
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
        Schema::dropIfExists('items');
    }
};
