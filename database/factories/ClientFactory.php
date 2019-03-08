<?php

//use Faker\Generator as Faker;

require_once 'vendor/autoload.php';
$faker = Faker\Factory::create('pt_BR');

$factory->define(\App\Client::class, function () use ($faker) {
    return [
        'name' => $faker->name,
        'cpf' => $faker->cpf,
        'date_of_birth' => $faker->date,
        'address' => $faker->address,
        'email' => $faker->email,
    ];
})
;
