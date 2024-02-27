<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



//models
use App\Models\Train;


class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10 ; $i++) {
            $train = new Train();
            $train->azienda = 'Trenitalia';
            $train->stazione_di_partenza = fake()->city();
            $train->stazione_di_arrivo = fake()->city();
            $train->orario_di_partenza = fake()->time();
            $train->orario_di_arrivo = fake()->time();
            $train->codice_treno = fake()->regexify('[A-Z]{5}[0-4]{3}');
            $train->numero_carrozze = 20;
            $train->in_orario = true;
            $train->cancellato = !rand(0, 1);
            $train->save();   
    }
}

}