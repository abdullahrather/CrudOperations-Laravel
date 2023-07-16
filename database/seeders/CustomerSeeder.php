<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Group;

use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $groupIds = Group::pluck('grp_id')->toArray();
        for ($i = 1; $i <= 100; $i++) {
            # code...
            $customer = new Customer;
            $customer->name = $faker->name;
            $customer->email = $faker->email;
            $customer->gender = $faker->randomElement(['M', 'F']);
            $customer->grp_id = $faker->randomElement($groupIds);
            $customer->address = $faker->address;
            $customer->country = $faker->country;
            $customer->state = $faker->state;
            $customer->DOB = $faker->date;
            $customer->password = password_hash($faker->password, (PASSWORD_DEFAULT));
            $customer->save();
        }
    }
}
