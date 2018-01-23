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
        //get base roles from db
        $role_employee = Role::where('name', 'employee')->first();
        $role_manager  = Role::where('name', 'manager')->first();

        $employee = new User();
        $employee->name = 'Jean R EMP';
        $employee->email = 'employee@dev.com';
        $employee->password = bcrypt('secret');
        $employee->save();
        $employee->roles()->attach($role_employee);

        $manager = new User();
        $manager->name = 'Jean R MANAGER';
        $manager->email = 'manager@dev.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        $manager->roles()->attach($role_manager);
    }
}
