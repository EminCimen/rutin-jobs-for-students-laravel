<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('siteName');
            $table->string('siteUrl');
            $table->string('siteLogo');
            $table->string('siteFavicon');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('youtube');
            $table->string('twitter');
            $table->boolean('isMaintenance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
