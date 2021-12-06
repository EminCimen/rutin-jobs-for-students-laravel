<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('companyRole')->nullable();
            $table->string('password');
            $table->string('personalPhone')->nullable();
            $table->string('companyName')->nullable();
            $table->integer('companyCategory')->nullable();
            $table->string('companyLocation')->nullable();
            $table->string('companyPhone')->nullable();
            $table->string('companyTeamSize')->nullable();
            $table->string('companyWebSite')->nullable();
            $table->string('companyLogo')->nullable();
            $table->string('companyFounded')->nullable();
            $table->text('companyAbout')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('isActive')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
