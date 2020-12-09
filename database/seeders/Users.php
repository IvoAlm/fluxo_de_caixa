<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Ivo',
            'email' => 'ivodsalmeida@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
