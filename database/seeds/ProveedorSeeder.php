<?php

use Illuminate\Database\Seeder;
use App\Proveedor;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proveedor = new Proveedor();
        $proveedor->nombre_proveedor='SINTERAMA';
        $proveedor->save();

        $proveedor = new Proveedor();
        $proveedor->nombre_proveedor='R-PAC HONG KONG LTD';
        $proveedor->save();

        $proveedor = new Proveedor();
        $proveedor->nombre_proveedor='MARK RIBBON';
        $proveedor->save();

        $proveedor = new Proveedor();
        $proveedor->nombre_proveedor='ICONINKS';
        $proveedor->save();
    }
}
