<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            // 1. Ing. de Sistemas
            [
                'dni' => '72819201',
                'codigo_institucional' => '0202114001',
                'nombres' => 'Fernando',
                'apellidos' => 'Chinchay',
                'name' => 'Fernando Chinchay',
                'email' => 'fernando@uns.edu.pe',
                'password' => Hash::make('12345678'),
                'escuela_profesional' => 'Ingeniería de Sistemas',
                'ciclo' => 'VI CICLO',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => '72819206',
                'codigo_institucional' => '0202114006',
                'nombres' => 'Patri',
                'apellidos' => 'Benites',
                'name' => 'Patri Benites',
                'email' => 'patri@uns.edu.pe',
                'password' => Hash::make('12345678'),
                'escuela_profesional' => 'Ingeniería de Sistemas',
                'ciclo' => 'VI CICLO',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => '72819207',
                'codigo_institucional' => '0202114007',
                'nombres' => 'Aaron',
                'apellidos' => 'Segura',
                'name' => 'Aaron Segura',
                'email' => 'aaron@uns.edu.pe',
                'password' => Hash::make('12345678'),
                'escuela_profesional' => 'Ingeniería de Sistemas',
                'ciclo' => 'VI CICLO',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 2. Ing. Civil
            [
                'dni' => '72819202',
                'codigo_institucional' => '0202114002',
                'nombres' => 'Carlos',
                'apellidos' => 'Mendoza',
                'name' => 'Carlos Mendoza',
                'email' => 'carlos.mendoza@uns.edu.pe',
                'password' => Hash::make('12345678'),
                'escuela_profesional' => 'Ingeniería Civil',
                'ciclo' => 'VIII CICLO',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => '72819208',
                'codigo_institucional' => '0202114008',
                'nombres' => 'Omar',
                'apellidos' => 'Castro',
                'name' => 'Omar Castro',
                'email' => 'omar@uns.edu.pe',
                'password' => Hash::make('12345678'),
                'escuela_profesional' => 'Ingeniería Civil',
                'ciclo' => 'IV CICLO',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => '72819212',
                'codigo_institucional' => '0202114012',
                'nombres' => 'Gabriel',
                'apellidos' => 'Silva',
                'name' => 'Gabriel Silva',
                'email' => 'gabriel.silva@uns.edu.pe',
                'password' => Hash::make('12345678'),
                'escuela_profesional' => 'Ingeniería Civil',
                'ciclo' => 'VI CICLO',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 3. Medicina Humana
            [
                'dni' => '72819203',
                'codigo_institucional' => '0202114003',
                'nombres' => 'María',
                'apellidos' => 'Rodríguez',
                'name' => 'María Rodríguez',
                'email' => 'maria.rodriguez@uns.edu.pe',
                'password' => Hash::make('12345678'),
                'escuela_profesional' => 'Medicina Humana',
                'ciclo' => 'X CICLO',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => '72819209',
                'codigo_institucional' => '0202114009',
                'nombres' => 'Sofía',
                'apellidos' => 'Morales',
                'name' => 'Sofía Morales',
                'email' => 'sofia.morales@uns.edu.pe',
                'password' => Hash::make('12345678'),
                'escuela_profesional' => 'Medicina Humana',
                'ciclo' => 'II CICLO',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 4. Enfermería
            [
                'dni' => '72819204',
                'codigo_institucional' => '0202114004',
                'nombres' => 'Ana',
                'apellidos' => 'Torres',
                'name' => 'Ana Torres',
                'email' => 'ana.torres@uns.edu.pe',
                'password' => Hash::make('12345678'),
                'escuela_profesional' => 'Enfermería',
                'ciclo' => 'IV CICLO',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => '72819211',
                'codigo_institucional' => '0202114011',
                'nombres' => 'Lucía',
                'apellidos' => 'Fernández',
                'name' => 'Lucía Fernández',
                'email' => 'lucia.fernandez@uns.edu.pe',
                'password' => Hash::make('12345678'),
                'escuela_profesional' => 'Enfermería',
                'ciclo' => 'VI CICLO',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 5. Derecho y Ciencias Políticas
            [
                'dni' => '72819205',
                'codigo_institucional' => '0202114005',
                'nombres' => 'Juan',
                'apellidos' => 'Vargas',
                'name' => 'Juan Vargas',
                'email' => 'juan.vargas@uns.edu.pe',
                'password' => Hash::make('12345678'),
                'escuela_profesional' => 'Derecho y Ciencias Políticas',
                'ciclo' => 'VI CICLO',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'dni' => '72819210',
                'codigo_institucional' => '0202114010',
                'nombres' => 'Diego',
                'apellidos' => 'Paredes',
                'name' => 'Diego Paredes',
                'email' => 'diego.paredes@uns.edu.pe',
                'password' => Hash::make('12345678'),
                'escuela_profesional' => 'Derecho y Ciencias Políticas',
                'ciclo' => 'VIII CICLO',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                ['codigo_institucional' => $user['codigo_institucional']],
                $user
            );
        }
    }
}
