<?php

use Illuminate\Database\Seeder;
use App\Reservacion;

class ReservacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Reservacion::class, 10)->create();
    }
}
