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
        factory(\CodeFin\User::class, 1)
            ->states('admin')
            ->create([
                'email' => 'admin@user.com',
                'name' => 'marcelo'
            ]);
    }
}
