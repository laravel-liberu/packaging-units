<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagingUnitsTable extends Migration
{
    public function up()
    {
        Schema::create('packaging_units', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->unique();
            $table->string('description')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('packaging_units');
    }
}
