<?php

use Faker\Generator as Faker;
use App\Articles;
$factory->define(Articles::class, function (Faker $faker) {
    return [
        "title"=>$faker->text(50),
        "description"=>$faker->text(150),
        'author'=>$faker->text(10)
    ];
});
