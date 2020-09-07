<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 7; $i++) {
          $new_comic = new Comic();
          $new_comic->title = $faker->randomElement(['V for Vendetta', 'Maus', 'Ranxerox', 'Sandman', 'Watchmen', 'Pompeo', 'Peanuts']);
          $new_comic->author = $faker->name;
          $new_comic->illustrator = $faker->name;
          $new_comic->genre = $faker->randomElement(['Action', 'Graphic Novel', 'Fantasy', 'Superhero']);
          $new_comic->pages = $faker->numberBetween(100, 400);
          $new_comic->color = $faker->boolean($chanceOfGettingTrue = 'color');
          $new_comic->description = $faker->paragraph();
          $new_comic->save();
        }
    }
}
