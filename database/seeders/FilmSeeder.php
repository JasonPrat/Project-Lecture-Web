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
            'title' => 'It Starts With Us',
            'synopsis' => 'Lily and her ex-husband, Ryle, have just settled into a civil coparenting rhythm when she suddenly bumps into her first love, Atlas, again. After nearly two years separated, she is elated that for once, time is on their side, and she immediately says yes when Atlas asks her on a date.',
            'rent_price' => '15.60',
            'price' => '120.60'
        ]);

        Film::create([
            'category_id' => 2,
            'title' => 'Things We Never Got Over',
            'synopsis' => 'Lucy is a Wall Street Journal and #1 Amazon Kindle Store bestseller of romantic comedies and contemporary romance. She grew up in rural Pennsylvania with a lot of time on her hands and a big imagination. She was the oldest of three in a book-obsessed household. Dinners were often spent in silence while family members had their noses buried in books. A passion for writing took hold at five when she taught her brother to write his name on the bathroom door.',
            'rent_price' => '20.60',
            'price' => '170.60'
        ]);

        Film::create([
            'category_id' => 3,
            'title' => 'Red, White & Royal Blue',
            'synopsis' => 'First Son Alex Claremont-Diaz is the closest thing to a prince this side of the Atlantic. With his intrepid sister and the Veep’s genius granddaughter, they’re the White House Trio, a beautiful millennial marketing strategy for his mother, President Ellen Claremont. International socialite duties do have downsides—namely, when photos of a confrontation with his longtime nemesis Prince Henry at a royal wedding leak to the tabloids and threaten American/British relations. The plan for damage control: staging a fake friendship between the First Son and the Prince.',
            'rent_price' => '14.60',
            'price' => '160.60'
        ]);

    }
}
