<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('nid')->unique();
            $table->string('name');
            $table->date('dob');
            $table->string('contact');
            $table->boolean('gender')->default(null);
            $table->boolean('med')->default(0);
            $table->boolean('preg')->default(0);
            $table->boolean('sp_care')->default(0);
            $table->unsignedBigInteger('house_id')->nullable();
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
        Schema::dropIfExists('people');
    }
}
