<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Train::create([
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => $faker->city,
                'stazione_di_arrivo' => $faker->city,
                'orario_di_partenza' => $faker->time('H:i:s'),
                'orario_di_arrivo' => $faker->time('H:i:s'),
                'codice_treno' => $faker->numberBetween(10000, 99999),
                'numero_carrozze' => $faker->numberBetween(1, 10),
                'in_orario' => $faker->boolean,
                'cancellato' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'date' => Carbon::now()->toDateString(),
            ]);
        }
    }
}
