<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
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
                $image_url = "dummybookimage.png";
            } else {
                $image_url = "dummybookimage2.png";
            }
            DB::table('books')->insert([
                'publisher_id' => $faker->numberBetween(1, 5),
                'title' => "Book " . $i,
                'author' => $faker->name(),
                'year' => $faker->numberBetween(1950, 2020),
                'synopsis' => $faker->sentence(),
                'image' => $image_url,
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ]);
        }
    }
}
