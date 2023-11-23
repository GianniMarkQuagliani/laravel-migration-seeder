<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trains')->insert([
            'azienda' => 'Trenitalia',
            'stazione_di_partenza' => 'Milano',
            'stazione_di_arrivo' => 'Roma',
            'orario_di_partenza' => '10:30',
            'orario_di_arrivo' => '15:30',
            'codice_treno' => '12345',
            'numero_carrozze' => 5,
            'in_orario' => 1,
            'cancellato' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'date' => Carbon::now()->toDateString(),
        ]);

        DB::table('trains')->insert([
            'azienda' => 'Trenitalia',
            'stazione_di_partenza' => 'Milano',
            'stazione_di_arrivo' => 'Napoli',
            'orario_di_partenza' => '10:30',
            'orario_di_arrivo' => '15:30',
            'codice_treno' => '12345',
            'numero_carrozze' => 5,
            'in_orario' => 1,
            'cancellato' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'date' => Carbon::now()->toDateString(),
        ]);
    }
}
