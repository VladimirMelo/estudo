<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Verifica se o usuário está cadastrado
        if (!User::where('email', 'vladimirmelo30@gmail.com')->first()) {

            // Cadastrar o usuário
            User::create([
                'name' => 'Vladimir',
                'email' => 'vladimirmelo30@gmail.com',
                'password' => 'A123456@',
            ]);
        }

        // Se não houver registro com o email, cadastra
        User::firstOrCreate(
            ['email' => 'heitor@gmail.com'],
            ['name' => 'Heitor Roller', 'email' => 'heitor@gmail.com', 'password' => 'A123456@'],
        );
    }
}
