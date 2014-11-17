<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        $user = User::create(array(
            'first_name'    => 'beniamin',
            'last_name'     => 'developer',
            'email'         => 'arosa.developer@gmail.com',
            'password'      => Hash::make('test'),
            'active'        => 1
        ));
    }

}