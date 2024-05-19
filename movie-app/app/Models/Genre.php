<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'descripsi' => 'JoJo Bizarre Adventure is a story about joestar family',
        ],
        [
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'descripsi' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ],
        [
            'id' => 3,
            'title' => ' Wind Breaker',
            'poster' => 'movie-03.jpg',
            'descripsi' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ],
        [
            'id' => 4,
            'title' => 'One Piece',
            'poster' => 'movie-05.jpeg',
            'descripsi' => 'The story follows the adventures of Monkey D. Luffy, a boy who has the ability to have an elastic body like rubber after accidentally eating the Devil Fruit. Luffy and his pirate crew, called the Straw Hat Pirates, explore the Grand Line in search of the world s greatest treasure known as One Piece in order to become the next Pirate King.',
        ],
        [
            'id' => 5,
            'title' => 'Tensei Shitara Slime Datta ken',
            'poster' => 'movie-06.jpeg',
            'descripsi' => 'The story of an office worker who was stabbed by a criminal as a result of helping someone he was killed and incarnated into a slime he was in his second life he aspired to build a country that was peaceful and comfortable for any race to live in without any discrimination.',
        ],

    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
