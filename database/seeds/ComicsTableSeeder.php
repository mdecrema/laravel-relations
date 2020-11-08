<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;
use App\Author;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<25; $i++) {

            $author = Author::inRandomOrder()->first();

            $newComic=new Comic;
            
            $newComic->author_id=$author->id;
            $newComic->title=$faker->word();        
            $newComic->original_title=$faker->word();
            $newComic->author=$faker->firstname();
            $newComic->image=$faker->word();
            $newComic->release=$faker->year('2000');
            $newComic->amount=$faker->randomFloat(3, 0, 999);

            $newComic->save();
        }
    }
}
