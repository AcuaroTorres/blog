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
        $role = new App\Role();
        $role->name = 'Admin';
        $role->description = 'Administrador de sistema';
        $role->save();

        $role = new App\Role();
        $role->name = 'Usuario';
        $role->description = 'Rol básico de sistema';
        $role->save();

        $role = new App\Role();
        $role->name = 'RRHH_Admin';
        $role->description = 'Administrador de RRHH';
        $role->save();
    }
}
