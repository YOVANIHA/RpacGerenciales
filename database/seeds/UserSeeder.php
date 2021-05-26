<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Rol;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->codigo_usuario = 'danielmontes01';
        $user->email = 'danielmontes@mail.com';
        $user->password = Hash::make('01montesdaniel');
        $user->rol_id=Rol::where('nombre_rol','Administrador')->first()->rol_id;
        $user->save();

        $user = new User();
        $user->codigo_usuario = 'juanvelasquez01';
        $user->email = 'juanvelasquez@mail.com';
        $user->password = Hash::make('01velasquezjuan');
        $user->rol_id=Rol::where('nombre_rol','Estratégico')->first()->rol_id;
        $user->save();

        $user = new User();
        $user->codigo_usuario = 'mariafunes01';
        $user->email = 'mariafunes@mail.com';
        $user->password = Hash::make('01funesmaria');
        $user->rol_id=Rol::where('nombre_rol','Táctico')->first()->rol_id;
        $user->save();
    }
}
