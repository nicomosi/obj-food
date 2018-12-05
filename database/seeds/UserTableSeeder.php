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
        $role_superAdmin=Role::where('name','superAdmin')->first();
        $role_admin=Role::where('name','admin')->first();
        $role_user=Role::where('name','user')->first();


        $superAdmin = new User();
        $superAdmin->name = 'nico';
        $superAdmin->email = 'nico_mosi@hotmail.com';
        // $superAdmin->role_id = 1;
        $superAdmin->password = bcrypt('123456');
        $superAdmin->save();
        $superAdmin->roles()->attach($role_superAdmin);

        $admin=new User();
        $admin->name='juan';
        $admin->email='juanspada@gmail.com';
        $admin->password=bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user=new User();
        $user->name='fede';
        $user->email='federico@21veinte.com';
        $user->password=bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_user);




    }
}
