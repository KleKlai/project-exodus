<?php

use Illuminate\Database\Seeder;
use App\Model\Register\Gallery;

class GalleryRegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
            'name'          => 'Agusan Artist Association (AAA)',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Bukidnon Local Artists Club (BLAC)',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Datu Bago',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Davao Oriental Artists',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Deanna Sipaco (DS) Foundation for the Differently-Abled, Inc.',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Gall Down South',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Good Times Café and Art Gallery (Zambo Norte)',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Guhit Pinas (Agusan)',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Iligan Visual Artists (IVA)',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Irinugyun',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Likha KARAGA',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Lumbayao Artist Collective',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Sining Mata Visual Art & Music School',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Studio One Art Iligan',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'Talaandig Soil Paintings',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'TheBauHaus',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'The Gallery of the Peninsula and the Archipelago',
            'description'   => '-'
        ]);

        Gallery::create([
            'name'          => 'TINTA Artists Iligan',
            'description'   => '-'
        ]);
    }
}
