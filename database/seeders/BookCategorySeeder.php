<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_categories')->insert([
            'category_id' => 1,
            'book_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('book_categories')->insert([
            'category_id' => 2,
            'book_id' => 2,
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('book_categories')->insert([
            'category_id' => 3,
            'book_id' => 1,
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('book_categories')->insert([
            'category_id' => 4,
            'book_id' => 3,
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('book_categories')->insert([
            'category_id' => 5,
            'book_id' => 4,
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
        DB::table('book_categories')->insert([
            'category_id' => 3,
            'book_id' => 3,
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
