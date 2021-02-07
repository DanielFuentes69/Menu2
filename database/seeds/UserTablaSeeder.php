<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name='Daniel fuentes';
        $user->email='daniel@fuentes.com';
        $user->password=Hash::make('12345678');
        $user->save();

        $user->roles()->attach(Role::where('name', 'Admin')->get()->first());
    }
}
