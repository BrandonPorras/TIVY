<?php
use Illuminate\Database\Seeder;
use TIVY\user;
use TIVY\Role;
class UserTableSeeder extends Seeder
{
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();


        $user = new User();
        $user->name = 'User';
        $user->lastname = 'User';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);


        $user = new User();
        $user->name = 'Admin';
        $user->lastname = 'admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);
     }
}

