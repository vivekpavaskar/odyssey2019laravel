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
            'email' => 'vivek@odyssey.com',
            'password' => bcrypt('vivek@odyssey'),
            'fname' => 'vivek',
            'lname' => 'pavaskar',
            'mobile' => '9876543210',
            'usn' => '2JIXXCSXXX',
            'sem' => '8',
            'college' => 'jce',
            'acctype' => 'a',
        ]);
    }
}
