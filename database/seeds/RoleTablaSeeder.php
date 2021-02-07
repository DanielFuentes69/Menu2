<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = new Role();
        $role->name='Admin';
        $role->description='Adminsitrador del Sistema';
        $role->save();

        $role = new Role();
        $role->name='User';
        $role->description='Usuario del Sistema';
        $role->save();
    }
}
