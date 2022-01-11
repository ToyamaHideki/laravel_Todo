<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table ->increments("id");
            $table -> string("name",50);
            $table ->char("status",1);
            $table ->timestamps();
            $table ->datetime("delete_at")->nullable();
            $table -> datetime("achivement")->nullable();
            $table -> date("deadline");
            $table -> string("setcount")->nullable();
            $table -> string("count")->nullable();
            $table -> string("")
            $table -> text("detail");
            $table ->boolean("delete_flg")->default(true)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
