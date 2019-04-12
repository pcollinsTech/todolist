<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class, 50)->create();

        App\User::create([
            'name' => 'Phil Collins',
            'email' => 'phil@phil.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
            'remember_token' => str_random(10),
        ]);
    }
}
