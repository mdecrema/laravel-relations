<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<15; $i++) {
            $newAuthor=new Author;

            $newAuthor->name=$faker->name($gender = null);
            $newAuthor->lastname=$faker->lastName();
            $newAuthor->nationality=$faker->stateAbbr();
            $newAuthor->date_of_birth=$faker->date($format = 'Y-m-d', $max = '1995');

            $newAuthor->save();

        }
    }
}
