<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Author;
use App\AuthorInfo;

class AuthorsInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $authors = Author::all();

        foreach ($authors as $author) {

            $newAuthorInfo=new AuthorInfo;

            $newAuthorInfo->author_id=$author->id;
            $newAuthorInfo->education=$faker->city();
            $newAuthorInfo->awards=$faker->company();
            $newAuthorInfo->books_written=$faker->numberBetween($min = 1, $max = 50);

            $newAuthorInfo->save();
        }
    }
}
