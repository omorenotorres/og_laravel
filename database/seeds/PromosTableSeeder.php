<?php

use Illuminate\Database\Seeder;
use App\Promo;

class PromosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Promo::class, 4)->create();
    }
}
