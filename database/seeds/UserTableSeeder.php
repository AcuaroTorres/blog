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
        $user_role      = App\Role::where('name', 'usuario')->first();
        $rrhhadmin_role = App\Role::where('name', 'RRHH_Admin')->first();

        $user1 = new App\User();
        $user1->name = 'Alvaro';
        $user1->email = 'a@b.c';
        $user1->password = bcrypt('pluto');
        $user1->save();
        $user1->roles()->attach($user_role);
        $user1->roles()->attach($rrhhadmin_role);

        $user2 = new App\User();
        $user2->name = 'Aaron';
        $user2->email = 'aaron@b.c';
        $user2->password = bcrypt('pluto');
        $user2->save();
        $user2->roles()->attach($user_role);

        $user3 = new App\User();
        $user3->name = 'Nicole';
        $user3->email = 'kidman@b.c';
        $user3->password = bcrypt('pluto');
        $user3->save();
        $user3->roles()->attach($user_role);
    }
}
