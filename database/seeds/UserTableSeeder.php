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
        $user->name = 'Admin';
        $user->lastname = 'admin';
        $user->email = 'admin@example.com';
        $user->description = 'Sonreir, bailar, ser Ricardo Milos';
        $user->password = bcrypt('secret');
        $user->imagen='/storage/milos.png';
        $user->state=1;
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'User';
        $user->lastname = 'User';
        $user->email = 'user@example.com';
        $user->description = 'Sonreir, bailar, ser Ricardo Milos';
        $user->imagen='/storage/milos.png';
        $user->password = bcrypt('secret');
        $user->state=0;
        $user->save();
        $user->roles()->attach($role_user);



     }
}

