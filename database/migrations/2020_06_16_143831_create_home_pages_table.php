<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('profile_pic')->default('defaultphoto.jpg');
            $table->string('phone');
            $table->string('age');
            $table->string('freelance');
            $table->string('address');
            $table->longText('description_one');
            $table->longText('description_two');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('skype');
            $table->string('linkedin');
            $table->string('stack');
            $table->string('github');
            $table->boolean('status');
            $table->softDeletes();
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
        Schema::dropIfExists('home_pages');
    }
}
