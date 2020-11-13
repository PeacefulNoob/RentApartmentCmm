<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name','admin')->first();
        $managerRole = Role::where('name','manager')->first();
        $userRole = Role::where('name','user')->first();


       $admin = User::create([
        'name' => 'Admin User',
        'email' => 'admin@admin.com',
        'password' => Hash::make('admin1234')
       ]);
       
       $manager = User::create([
        'name' => 'manager User',
        'email' => 'manager@manager.com',
        'password' => Hash::make('manager1234')
               ]);

        $user = User::create([
        'name' => 'Genetic User',
        'email' => 'user@user.com',
        'password' => Hash::make('user1234')
                ]);

        $admin->roles()->attach($adminRole);
        $manager->roles()->attach($managerRole);
        $user->roles()->attach($userRole);

        
    }
}
