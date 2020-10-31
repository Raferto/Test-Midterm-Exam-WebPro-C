<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToShopBadges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shop_badges', function (Blueprint $table) {
            $table->text('description')->nullable()->onDe;
            $table->integer('price')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop_badges', function (Blueprint $table) {
            $table->dropColumn(['description', 'price']);
        });
    }
}
