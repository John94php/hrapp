<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Contract;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Contract::class, function (Faker $faker) {
    $minDate = "2020-01-01";
    $maxDate = "2020-12-31";
    $min = strtotime($minDate);
    $max = strtotime($maxDate);
    return [
        //

        "name_contract" => $faker->name,
        "surname_contract" => $faker->lastName,
        "pesel_contract" => $faker->numerify("#########"),
        "email_contract" => $faker->unique()->safeEmail,
        "document_contract"=> $faker->bothify("??????###"),
        "telephone_contract" => $faker->numerify("#########"),
        "corrCode" => $faker->numerify($string = "##-###"),
        "corrCountry" => "Polska",
        "corrCity" => $faker->city,
        "corrStreet" => $faker->streetName,
        "corrHouse" => $faker->randomDigit(3),
        "corrFlat"=> $faker->randomDigit(2),
        "regCode" => $faker->numerify($string = "##-###"),
        "regCountry" =>"Polska",
        "regCity" => $faker->city,
        "regStreet"=> $faker->streetName,
        "regHouse" => $faker->randomDigit(3),
        "regFlat" =>$faker->randomDigit(2),
        "typeContract"=> $faker->randomElement(['Umowa Zlecenie','Umowa o pracę']),
        "dateContract" => $faker->dateTimeBetween('now','+6 year',$timezone = null),
        "branchContract"=> $faker->randomElement(['Dział IT','Księgowość','Logistyka']),

    ];
});
