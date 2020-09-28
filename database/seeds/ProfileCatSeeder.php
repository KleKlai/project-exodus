<?php

use Illuminate\Database\Seeder;
use App\Model\Profile\Type;

class ProfileCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Agusan Artist Association (AAA)',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Bukidnon Local Artists Club (BLAC)',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Datu Bago',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Davao Oriental Artists',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Deanna Sipaco (DS) Foundation for the Differently-Abled, Inc.',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Gall Down South',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Good Times Café and Art Gallery (Zambo Norte)',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Guhit Pinas (Agusan)',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Iligan Visual Artists (IVA)',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Irinugyun',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Likha KARAGA',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Lumbayao Artist Collective',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Sining Mata Visual Art & Music School',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Studio One Art Iligan',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'Talaandig Soil Paintings',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'TheBauHaus',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'The Gallery of the Peninsula and the Archipelago',
        ]);

        Type::create([
            'category'      => 'Gallery',
            'subcategory'          => 'TINTA Artists Iligan',
        ]);
    }
}
