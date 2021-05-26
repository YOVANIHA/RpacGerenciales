<?php

use Illuminate\Database\Seeder;
use App\Rol;
class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Rol();
        $rol->nombre_rol = 'Administrador';
        $rol->descripcion = 'Este usuario puede acceder a las opciones de gestión de usuarios y bitácora';
        $rol->save();

        $rol = new Rol();
        $rol->nombre_rol = 'Estratégico';
        $rol->descripcion = 'Este usuario puede acceder a las opciones de reportes estratégicos y reportes tácticos';
        $rol->save();

        $rol = new Rol();
        $rol->nombre_rol = 'Táctico';
        $rol->descripcion = 'Este usuario puede acceder a las opciones de reportes tácticos';
        $rol->save();
    }
}
