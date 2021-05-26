<?php

use Illuminate\Database\Seeder;
use App\TipoMateriaPrima;

class TipoMateriaPrimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoMateriaPrima = new TipoMateriaPrima();
        $tipoMateriaPrima->nombre_tipo_materia_prima='tipo 1';
        $tipoMateriaPrima->save();

        $tipoMateriaPrima = new TipoMateriaPrima();
        $tipoMateriaPrima->nombre_tipo_materia_prima='tipo 2';
        $tipoMateriaPrima->save();

        $tipoMateriaPrima = new TipoMateriaPrima();
        $tipoMateriaPrima->nombre_tipo_materia_prima='tipo 3';
        $tipoMateriaPrima->save();

        $tipoMateriaPrima = new TipoMateriaPrima();
        $tipoMateriaPrima->nombre_tipo_materia_prima='tipo 4';
        $tipoMateriaPrima->save();
    }
}
