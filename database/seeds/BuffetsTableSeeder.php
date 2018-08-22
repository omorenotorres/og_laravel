<?php

use Illuminate\Database\Seeder;
use App\Buffet; 

class BuffetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Buffet::class, 5)->create();
    }
}
