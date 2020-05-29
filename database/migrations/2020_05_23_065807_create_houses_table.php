<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->string('name');
            $table->string('road')->nullable();
            $table->string('atoll');
            $table->string('island');
            $table->string('img_url')->nullable();
            $table->timestamps();

            $table->index('owner_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
