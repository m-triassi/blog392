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
        DB::table('users')->insert([
            'id'=> \Ramsey\Uuid\Uuid::uuid4(),
            'name' => 'Massimo Triassi',
            'email' => env('USER_EMAIL'),
            'password' => bcrypt(env('USER_PASSWORD')),
        ]);
    }
}
