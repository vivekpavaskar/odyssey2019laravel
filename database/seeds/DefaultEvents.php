<?php

use Illuminate\Database\Seeder;

class DefaultEvents extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('events')->insert([
            'ecode' => 'E-CS01',
            'event' => 'Mystry Code',
            'dept' => 'CSE',
        ]);
    }
}
