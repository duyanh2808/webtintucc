<?php

namespace Database\Seeders;

use App\Models\admin;
use App\Models\roles;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::truncate();
       

        $adminRoles = roles::where('name','admin')->first();
        $authorRoles = roles::where('name','author')->first();
        $userRoles = roles::where('name','user')->first();
        
        $admin = admin::create([
            'admin_name' => 'anhadmin',
            'admin_email' => 'anhadmin@gmail.com',
            'admin_phone' => '123456789',
            'admin_password' => md5('123456')
        ]);
        $author = admin::create([
            'admin_name' => 'anhauthor',
            'admin_email' => 'anhauthor@gmail.com',
            'admin_phone' => '12345559',
            'admin_password' => md5('123456')
        ]);
        $user = admin::create([
            'admin_name' => 'anhuser',
            'admin_email' => 'anhuser@gmail.com',
            'admin_phone' => '1237789',
            'admin_password' => md5('123456')
        ]);

        $admin->roles()->attach($adminRoles);
        $author->roles()->attach($authorRoles);
        $user->roles()->attach($userRoles);


    }
}
