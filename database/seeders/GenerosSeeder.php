<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("generos")->insert(["descripcion" => "Acción", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Comedia", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Aventuras", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Infantil", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Romance", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Ciencia Ficción", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Drama", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Fantasía", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Musical", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "3d", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Documental", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Religiosas", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Policivas", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Deportivas", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Terror", "created_at" => now(), "updated_at" => now()]);
        DB::table("generos")->insert(["descripcion" => "Suspenso", "created_at" => now(), "updated_at" => now()]);
    }
}
