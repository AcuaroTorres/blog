<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new App\Role();
        $role_user->name = 'usuario';
        $role_user->description = 'Rol básico de sistema';
        $role_user->save();

        $role_rrhh_admin = new App\Role();
        $role_rrhh_admin->name = 'RRHH_Admin';
        $role_rrhh_admin->description = 'Administrador de RRHH';
        $role_rrhh_admin->save();
    }
}
