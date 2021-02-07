<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Autor;
use App\Models\Libro;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        $autores = Autor::all();
        $autores->each(function ($autor) {
            Libro::factory(Libro::class, 2)->create([
                'autor_id' => $autor->id
            ]);
        });
    }
}
