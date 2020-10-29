<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->foreignId('badge_id')->nullable();
            $table->foreignId('city_id')->nullable();
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });

        Schema::table('shops', function (Blueprint $table) {
            $table->foreign('badge_id')->references('id')->on('shop_badges')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
