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

        $train->agency = 'Trenitalia';
        $train->departure_station = 'Roma Termini';
        $train->arrival_station = 'Milano Centrale';
        $train->departure_day = 2022 - 05 - 26;
        $train->departure_time = '16:30';
        $train->arrival_time = '18:30';
        $train->train_code = 15678;
        $train->train_carriage_number = 7;
        $train->on_time = true;
        $train->deleted = false;

        $train->save();
    }
}
