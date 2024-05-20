<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user' => 'Hitoru',
            'rating' => '9,5/10',
            'date' => '19-08-21',
        ],

        [
            'id' => 2,
            'movie' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => 'Nabila',
            'rating' => '8/10',
            'date' => '25-11-22',
        ],
        
        [
            'id' => 3,
            'movie' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'user' => 'Natsuki',
            'rating' => '7/10',
            'date' => '01-05-24',
        ],
        
        [
            'id' => 4,
            'movie' => 'Konosuba',
            'poster' => 'movie-05.jpg',
            'user' => 'Eka',
            'rating' => '9/10',
            'date' => '17-08-19',
        ],
        
        [
            'id' => 5,
            'movie' => 'Spy X Family',
            'poster' => 'movie-04.jpg',
            'user' => 'Abi',
            'rating' => '8,7/10',
            'date' => '22-02-22',
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
