<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CarouselsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(PromosTableSeeder::class);
        $this->call(TplatosTableSeeder::class);
        $this->call(BuffetsTableSeeder::class);
        $this->call(ContactosTableSeeder::class);
        $this->call(ReservacionsTableSeeder::class);
    }
}
