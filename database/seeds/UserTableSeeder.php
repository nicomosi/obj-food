<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'nico';
        $user->email = 'nico_mosi@hotmail.com';
        // $user->role_id = 1;
        $user->password = bcrypt('e93187344');
        $user->save();


    }
}
