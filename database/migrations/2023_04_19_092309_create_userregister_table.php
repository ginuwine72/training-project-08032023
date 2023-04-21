<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserregisterTable extends Migration
{
    public function up()
    {
        Schema::create('userregister', function (Blueprint $table) {
            $table->id();
            $table->string('ID_User', 15)->unique();
            $table->string('password');
            $table->string('fullname', 100);
            $table->string('email')->unique();
            $table->string('phone', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('userregister');
    }
}

