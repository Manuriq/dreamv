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
            $table->longText('status')->nullable();
            $table->longText('skills')->nullable();
            $table->longText('body_data')->nullable();
            $table->integer('life')->nullable()->default(200);
            $table->integer('armor')->nullable()->default(0);
            $table->string('demarche', 30)->nullable()->default('move_m@casual@a');
            $table->string('hud_option', 11)->nullable()->default('hudTrue');
            $table->string('cam_option', 11)->nullable()->default('camTrue');
            $table->string('group', 50)->nullable()->default('user');
            $table->string('job', 20)->nullable()->default('unemployed');
            $table->integer('job_grade')->nullable()->default(0);
            $table->string('job2', 20)->nullable()->default('unemployed2');
            $table->integer('job2_grade')->nullable()->default(0);
            $table->string('position')->nullable()->default('{"x":-756.97,"y":324.67,"z":230.48,"heading":91.5}');
            $table->longText('imgurl')->nullable();
            $table->string('firstname', 16)->nullable();
            $table->string('lastname', 16)->nullable();
            $table->string('dateofbirth', 10)->nullable();
            $table->string('sex', 1)->nullable();
            $table->integer('height')->nullable();
            $table->boolean('is_dead')->nullable()->default(false);
            $table->boolean('is_gps')->nullable()->default(false);
            $table->longText('skin')->nullable();
            $table->string('pedhash', 40)->nullable();
            $table->string('pet', 50)->nullable();
            $table->string('petLabel', 20)->nullable()->default('Votre animal');
            $table->longText('petStatus')->nullable();
            $table->longText('tattoos')->nullable();
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
        Schema::dropIfExists('users');
    }
}
