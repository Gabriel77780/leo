<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDentistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dentist', function (Blueprint $table) {
            $table->id();
            $table->string('identification');
            $table->string('name1');
            $table->string('name2');
            $table->string('last_name1');
            $table->string('last_name2');
            $table->string('email', 191)->unique();
            $table->unsignedBigInteger('identification_type_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });

        Schema::table('dentist', function (Blueprint $table) {
            $table->foreign('identification_type_id')->references('id')->on('identification_type');
            $table->foreign('user_id')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dentists');
    }
}
