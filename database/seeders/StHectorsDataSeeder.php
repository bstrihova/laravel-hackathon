<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Owner;
use App\Models\Animal;

class StHectorsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_string = file_get_contents('storage\clients.json'); // replace path with a real path
$data = json_decode($json_string); // decode the string into data
//var_dump($data);

        foreach ($data as $value) {
            $owner = new Owner;
            $owner->first_name = $value->first_name;
            $owner->surname = $value->surname;
            $owner->save();


            foreach ($value->pets as $pet) {
                $animal = new Animal;
                $animal->owner_id = $owner['id'];
                $animal->name = $pet->name;
                $animal->breed = $pet->breed;
                $animal->weight = $pet->weight;
                $animal->age = $pet->age;
                $animal->photo = 'images/pets/' . $pet->photo;
                $animal->save();
            }
            
        }
    }
}
