<?php

use Illuminate\Database\Seeder;
use App\Albums;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = factory(App\Album::class,25)->create();
        $artist = factory(App\Album::class,25)->create();
        $genre = factory(App\Album::class,25)->create();
        $artworkPath = factory(App\Album::class,25)->create();
    }
}
