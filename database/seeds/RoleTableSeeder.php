<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();
        $role = new Role();
        $role->name = 'user_habitante_calle';
        $role->description = 'user_habitante_calle';
        $role->save();
        $role = new Role();
        $role->name = 'user_juventud';
        $role->description = 'user_juventud';
        $role->save();
        $role = new Role();
        $role->name = 'user_mujer';
        $role->description = 'user_mujer';
        $role->save();
        
    }
}
