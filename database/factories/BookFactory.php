<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {

    $randomNumber=rand(1,100);
    $cover="https://picsum.photos/id/{$randomNumber}/200/300";

    
    return [
        'kode_author'=>Author::inRandomOrder()->first()->kode_author,
        'title'=>$faker->sentence(4),
        'description'=>$faker->sentence(40),
        'cover'=> $cover,
        'qty'=>rand(10,20),
    ];
});
