<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->dev();
        $this->randomUsers();
    }

    private function dev()
    {
    	$u =  new App\User();
    	$u->name = 'Developer';
    	$u->email = 'dev@gmail.com';
    	$u->password = bcrypt('password');
    	$u->save();
    }

    private function randomUsers()
    {
        $u = new App\User();
        $u->name = 'Jorefice';
        $u->email = 'jorefice@iastate.edu';
        $u->password = bcrypt('abcdefg1');
        $u->save();
    }
}
