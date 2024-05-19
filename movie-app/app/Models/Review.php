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
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user' => 'Santoso',
            'rating' => '9/10',
            'date' => '2020-05-20',
        ],
        [
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => 'Hidan',
            'rating' => '8/10',
            'date' => '2023-11-06',
        ],
        [
            'id' => 3,
            'title' => ' Wind Breaker',
            'poster' => 'movie-03.jpg',
            'user' => 'Overdosez',
            'rating' => '7/10',
            'date' => '2024-05-12',
        ],
        [
            'id' => 4,
            'title' => 'One Piece',
            'poster' => 'movie-05.jpeg',
            'user' => 'Genta',
            'rating' => '10/10',
            'date' => '2022-11-04',
        ],
        [
            'id' => 5,
            'title' => 'Tensei Shitara Slime Datta ken',
            'poster' => 'movie-06.jpeg',
            'user' => 'Shiki',
            'rating' => '9/10',
            'date' => '2023-11-20',
        ],

    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
