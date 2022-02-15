<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('discordid');
            $table->string('username')->nullable();
            $table->integer('discriminator')->nullable();
            $table->string('avatar')->nullable();
            $table->string('email')->nullable();
            $table->boolean('verified')->nullable();
            $table->string('identifier', 40)->nullable();
            $table->integer('whitelisted')->nullable();
            $table->integer('qcm')->default(0);
            $table->integer('try')->default(0);
            $table->integer('admin')->default(0);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
