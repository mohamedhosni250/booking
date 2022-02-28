<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tours = [[
            'title' => 'STANDARD FLIGHT',
            'genre_id' => 1,
            'description' => 'this is description of the flight',
            'adult_price' => 150,
            'child_price' => 100
        ], [
            'title' => 'Premium FLIGHT',
            'genre_id' => 1,
            'description' => 'this is description of the flight',
            'adult_price' => 180,
            'child_price' => 100
        ]];
        foreach ($tours as $tour) {
            Tour::create($tour);
        }
    }
}
