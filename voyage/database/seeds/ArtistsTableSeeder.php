<?php

use Illuminate\Database\Seeder;
use App\Artists;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Artist::class, 25)->create();
    }
}
