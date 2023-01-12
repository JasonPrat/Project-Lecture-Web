<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::create([
            'category_id' => 1,
            'title' => 'The Batman',
            'image' => '1.jpg',
            'synopsis' => "When a sadistic serial killer begins murdering key political figures in Gotham, Batman is forced to investigate the city's hidden corruption and question his family's involvement.",
            'rent_price' => '15.60',
            'price' => '120.60'
        ]);

        Film::create([
            'category_id' => 2,
            'title' => 'Doctor Strange',
            'image' => '2.jpg',
            'synopsis' => "Doctor Strange teams up with a mysterious teenage girl from his dreams who can travel across multiverses, to battle multiple threats, including other-universe versions of himself, which threaten to wipe out millions across the multiverse. They seek help from Wanda the Scarlet Witch, Wong and others.",
            'rent_price' => '20.60',
            'price' => '170.60'
        ]);

        Film::create([
            'category_id' => 3,
            'title' => 'Thor : Love and Thunder',
            'image' => '3.jpg',
            'synopsis' => "Thor enlists the help of Valkyrie, Korg and ex-girlfriend Jane Foster to fight Gorr the God Butcher, who intends to make the gods extinct.",
            'rent_price' => '14.60',
            'price' => '160.60'
        ]);

        Film::create([
            'category_id' => 1,
            'title' => 'Black Panther',
            'image' => '4.jpg',
            'synopsis' => "The people of Wakanda fight to protect their home from intervening world powers as they mourn the death of King T'Challa.",
            'rent_price' => '12.60',
            'price' => '170.20'
        ]);

    }
}
