<?php

use Illuminate\Database\Seeder;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        \App\Book::create([
            'author'     => $faker->name,
            'book_name' => $faker->text
        ], 10);
    }
}
