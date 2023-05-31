<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* DB::table('users')->insert([
        "name" => 'Gisela',
        "email" => 'gagusti@isft38.edu.ar',
        "password" => "secret",
        ]);*/
        User::factory(10)->create(); //Crea 10 Usuarios utilizando el Factory UserFactory
    }
}