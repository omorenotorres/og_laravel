<?php

use Illuminate\Database\Seeder;
use App\Carousel;   

class CarouselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Carousel::class, 5)->create();
    }
}
