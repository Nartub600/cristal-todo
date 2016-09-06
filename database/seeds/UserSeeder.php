<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([ 'name' => 'Martin', 'password' => Hash::make('todo') ]);
        User::create([ 'name' => 'Alejandro', 'password' => Hash::make('todo') ]);
        User::create([ 'name' => 'Jason', 'password' => Hash::make('todo') ]);
    }
}
