<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //membuat role
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "admin";
        $adminRole->save();

        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "member";
        $memberRole->save();

        $admin = new User ();
        $admin->name = "Admin";
        $admin->email = "admin@gmail.com";
        $admin->password =bcrypt ('admin123');
        $admin->save();
        $admin->attachRole($adminRole);

        $member = new User ();
        $member->name = "member";
        $member->email = "member@gmail.com";
        $member->password =bcrypt ('rahasiaa');
        $member->save();
        $member->attachRole($memberRole);
    }
}
