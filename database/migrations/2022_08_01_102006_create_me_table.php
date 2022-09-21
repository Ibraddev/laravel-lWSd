<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('me', function (Blueprint $table) {
            $table->id();
            $table->string('birthday');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('email');
            $table->string('freelance');
            $table->text('img_url');
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
        Schema::dropIfExists('me');
    }
};
