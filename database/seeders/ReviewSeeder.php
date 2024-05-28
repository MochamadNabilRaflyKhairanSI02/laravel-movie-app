<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'movie_id' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user' => 'Hitoru',
            'rating' => '9/10',
            'date' => '17-10-17',
        ]);

        Review::create([
            'movie_id' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => 'Nabila',
            'rating' => '8/10',
            'date' => '10-08-18',
        ]);

        Review::create([
            'movie_id' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'user' => 'Karin',
            'rating' => '8,5./10',
            'date' => '14-04-24',
        ]);

        Review::create([
            'movie_id' => 'Konosuba',
            'poster' => 'movie-05.jpg',
            'user' => 'Cecilia',
            'rating' => '9/10',
            'date' => '03-11-20',
        ]);

        Review::create([
            'movie_id' => 'Spy X Family',
            'poster' => 'movie-04.jpg',
            'user' => 'Nabilapollo',
            'rating' => '8/10',
            'date' => '21-10-21',
        ]);
    }
}
