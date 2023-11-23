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
        for($i = 0; $i < 10; $i++) {
           DB::table('trains')->insert([
            'azienda' => 'Trenitalia',
            'stazione_di_partenza' => 'Milano' . $i,
            'stazione_di_arrivo' => 'Roma' . $i,
            'orario_di_partenza' => '10:30:00' . $i,
            'orario_di_arrivo' => '15:30:00' . $i,
            'codice_treno' => '12345' . $i,
            'numero_carrozze' => 5,
            'in_orario' => 1,
            'cancellato' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'date' => Carbon::now()->toDateString(),
        ]);
        }

    }
}
