<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reals', function (Blueprint $table) {
            $table -> id();
            $table -> date("date");
            $table -> float("real") -> nullable();
            $table -> integer("protain")-> nullable();
            $table -> integer("calorie")-> nullable();
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reals');
    }
}
