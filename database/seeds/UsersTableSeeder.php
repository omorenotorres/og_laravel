<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(User::class, 5)->create();

        App\User::create([
            'name'=>'omorenotorres',
            'email'=>'omorenotorres@hotmail.com',
            'password'=>bcrypt('omorenotorres')
            ]);
    }
}
