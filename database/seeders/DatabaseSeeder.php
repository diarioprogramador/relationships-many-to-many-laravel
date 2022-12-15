<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Curso;
use App\Models\Estudiante;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Se crean 15 estudiantes
        Estudiante::factory()->times(15)->create();
        //Se crean 8 cursos
        Curso::factory()->times(8)->create()->each( function($curso){
            $curso->estudiantes()->sync(
                //Cada curso es tomado por 3 estudiantes
                Estudiante::all()->random(3)
            );
        });

    }
}
