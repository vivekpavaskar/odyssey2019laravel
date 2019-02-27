<?php

use Illuminate\Database\Seeder;

class DefaultUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'email' => 'admin@odyssey.com',
            'password' => bcrypt('vivek@odyssey.!@#'),
            'fname' => 'vivek',
            'lname' => 'pavaskar',
            'acctype' => 'a',
        ]);
    }
}
