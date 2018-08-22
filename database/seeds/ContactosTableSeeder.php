<?php

use Illuminate\Database\Seeder;
use App\Contacto; 

class ContactosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Contacto::class, 6)->create();
    }
}
