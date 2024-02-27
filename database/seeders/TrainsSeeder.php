<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

//models
use App\Models\Train;


class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10 ; $i++) {
            $train = new Train();
            $train->azienda = 'Trenitalia';
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $train->numero_carrozze = 20;
            $train->in_orario = true;
            $train->cancellato = !rand(0, 1);
            $train->save();   
    }
}

}