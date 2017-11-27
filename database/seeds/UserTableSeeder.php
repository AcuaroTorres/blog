<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$admin_role         = App\Role::where('name', 'Admin')->first();
        //$usuario_role       = App\Role::where('name', 'Usuario')->first();
        //$rrhh_admin_role    = App\Role::where('name', 'RRHH_Admin')->first();

        $user = new App\User();
        $user->id = 15287582;
        $user->name = 'Alvaro';
        $user->email = 'a@b.c';
        $user->password = bcrypt('pluto');
        $user->save();
        $user->roles()->attach(App\Role::where('name', 'Admin')->first());
        $user->roles()->attach(App\Role::where('name', 'Usuario')->first());

        $user = new App\User();
        $user->id = 21097570;
        $user->name = 'Aaron';
        $user->email = 'aaron@b.c';
        $user->password = bcrypt('pluto');
        $user->save();
        $user->roles()->attach(App\Role::where('name', 'Usuario')->first());
        $user->roles()->attach(App\Role::where('name', 'RRHH_Admin')->first());

        $user = new App\User();
        $user->id = 16000123;
        $user->name = 'Nicole';
        $user->email = 'kidman@b.c';
        $user->password = bcrypt('pluto');
        $user->save();
        $user->roles()->attach(App\Role::where('name', 'Usuario')->first());
    }
}
