<?php

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train->agency = 'Da Mario';
        $train->departure_station = 'Stazione San Biagio';
        $train->arrival_station = 'Stazione Monteforte';
        $train->departure_time = '16:30' ;
        $train->arrival_time = '17:30';
        $train->train_code = 8525;
        $train->carreges = 16;
        $train->on_time = 1;
        $train->deleted = 1;

        $train->save();
    }
}
