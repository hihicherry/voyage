<?php

use Illuminate\Database\Seeder;
use App\Album;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = factory(Album::class,25)->create();
        $artist_id = factory(Album::class,25)->create();
        $genre = factory(Album::class,25)->create();
        $artworkPath = factory(Album::class,25)->create();
    }
}
