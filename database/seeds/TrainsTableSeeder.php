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
        $currentDate = date("Y-m-d");

        $train = new Train();

        $train->agency = 'Italo';
        $train->departure_station = 'Padova Centrale';
        $train->arrival_station = 'Roma Tiburtina';
<<<<<<< HEAD
        $train->departure_day = $currentDate;
=======
        $train->departure_day = '2022-05-29';
>>>>>>> c48296683fbc92e117f0aa1f34ee42a5f4ec4272
        $train->departure_time = '15:00';
        $train->arrival_time = '19:00';
        $train->train_code = 18495;
        $train->train_carriage_number = 7;
        $train->on_time = true;
        $train->deleted = false;

        $train->save();
    }
}
