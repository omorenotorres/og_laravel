<?php

use Illuminate\Database\Seeder;
use App\Tplato;

class TplatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Tplato::class, 17)->create();
    }
}
