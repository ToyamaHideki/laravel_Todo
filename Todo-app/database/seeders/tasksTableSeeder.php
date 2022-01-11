<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class tasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'id' =>
            'name' =>
            'status' => 
            'create_at' => 
            'update_at' => 
            'delete_at' => 
            'achivement' => 
            'deadline' => 
            'setcount' => 
            'count' => 
            'detail' => 
            'delete_flg' => 
        }
    }
}
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