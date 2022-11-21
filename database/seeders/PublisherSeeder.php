<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 5; $i++) {
            $image_url = "";
            if ($i % 2 == 0) {
                $image_url = "dummyimage.png";
            } else {
                $image_url = "dummyimage2.png";
            }
            DB::table('publishers')->insert([
                'name' => "Publisher " . $i,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'image' => $image_url,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ]);
        }
    }
}
