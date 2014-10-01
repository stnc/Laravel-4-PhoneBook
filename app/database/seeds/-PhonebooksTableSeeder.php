<?php

class PhonebooksTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            //'name'     => 'Chris Sevilleja',
            'user_id' => '5',
            'username' => 'selman',
            'email' => 'selmantunc@gmail.com',
            'password' => Hash::make('12345'),
        ));
    }

}