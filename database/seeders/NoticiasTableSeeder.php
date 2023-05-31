<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Noticia;
use App\Models\User;

class NoticiasTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    /*  $n = new Noticia();
    $n->titulo = "Titulo de prueba";
    $n->cuerpo = "Cuerpo de prueba";
    $n->autor = User::all()->random()->id;
    $n->save();*/

    Noticia::factory(30)->create();
  }
}