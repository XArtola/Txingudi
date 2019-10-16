<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run()
    {
        $this->call('tiendasSeeder');
        $this->call('productosSeeder');

        $this->command->info('User table seeded!');
    }

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('email' => 'foo@bar.com'));
    }

}
