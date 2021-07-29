<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "usuario" => "admin",
            "password" => "827ccb0eea8a706c4c34a16891f84e7b",
            "nombre" => "Administrador",
            "rol" => "admin",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        DB::table("users")->insert([
            "usuario" => "luz.alba31",
            "password" => "827ccb0eea8a706c4c34a16891f84e7b",
            "nombre" => "Luz Alba",
            "rol" => "user",
            "created_at" => now(),
            "updated_at" => now()
        ]);
        DB::table("users")->insert([
            "usuario" => "tenismith23",
            "password" => "827ccb0eea8a706c4c34a16891f84e7b",
            "nombre" => "Teñikaler Smith",
            "rol" => "user",
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}
