<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Car;

class CarDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = User::factory(100)->create();


        foreach ($users as $user) {

            Car::factory(random_int(1, 3))->create([
                'owner_id' => $user->id,
            ]);
        }
    }
}
