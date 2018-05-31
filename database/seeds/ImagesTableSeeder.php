<?php

use App\Image;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create();
        $imageLinks = array(
            "http://lorempixel.com/300/200/sports",
            "http://lorempixel.com/300/200/people",
            "http://lorempixel.com/300/200/Dummy-Text",
            "http://lorempixel.com/300/200/people",
            "http://lorempixel.com/300/200/cats",
            "http://lorempixel.com/300/200/sports",
            "http://lorempixel.com/300/200/people",
            "http://lorempixel.com/300/200/cats",
        );

        foreach($imageLinks as $imageLink)
        {
            Image::create([
                'title' => $content =  $faker->text(80),
                'description' => $content = $faker->paragraph(19),
                'thumbnail' => $imageLink."jpg",
                'imageLink' =>$imageLink."-1.jpg",
                'user_id' => $faker->numberBetween($min = 1, $max = 5),

            ]);
        }


    }
}
