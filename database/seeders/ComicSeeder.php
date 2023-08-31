<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        foreach ($comics as $comic) {

            $new_comic = new Comic();

            $writers = implode(', ', $comic['writers']);
            $artists = implode(', ', $comic['artists']);

            $new_comic->title = $comic['title'];
            $new_comic->series = $comic['series'];
            $new_comic->type = $comic['type'];
            $new_comic->rated = $comic['rated'];
            $new_comic->page_count = $comic['page_count'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->writers = $writers;
            $new_comic->artists = $artists;

            $new_comic->save();
        }
    }
}
