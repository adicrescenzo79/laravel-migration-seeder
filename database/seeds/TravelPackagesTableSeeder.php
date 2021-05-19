<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel_package;

class TravelPackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $newObject = new Travel_package();
        $newObject->location = $faker->city();
        $newObject->location_type = $faker->randomElement(['Mare', 'Montagna', 'SPA', 'Città d\'arte']);
        $newObject->accomodation = $faker->company();
        $newObject->accomodation_type = $faker->randomElement(['Hotel', 'Ostello', 'B&B', 'Appartamento', 'Camping']);
        $newObject->nights = $faker->numberBetween(1, 10);
        $newObject->transfer_included = $faker->numberBetween(0, 1);
        $newObject->peolpe_maximum = $faker->numberBetween(1, 5);
        $newObject->cost_per_person = $faker->randomFloat(2, 100, 250);
        $newObject->save();
      }
    }
}
