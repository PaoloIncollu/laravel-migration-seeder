<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 200; $i++) {
            $train = new Train();
            $train->company = fake()->company();
            $train->departureStation = fake()->city();
            $train->arrivalStation = fake()->city();
            $train->departureDate = fake()->dateTimeBetween('now', '+2 week');
            $train->departureTime = fake()->time('H:i:s');
            $train->arrivalTime = fake()->time('H:i:s');
            $train->trainCode = fake()->randomNumber(7, true);
            $train->numberOfCarriages =fake()->randomNumber(1, false);
            $train->deleted = fake()->boolean(20);

            if($train->deleted == false){

                $train->onTime = fake()->boolean(80);

            }

            else{

                $train->onTime = fake()->boolean(false);
            }

            $train->save();
        }
    }

}
