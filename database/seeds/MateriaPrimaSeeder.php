<?php

use Illuminate\Database\Seeder;
use App\TipoMateriaPrima;
use App\MateriaPrima;

class MateriaPrimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materiaPrima = new MateriaPrima();
        $materiaPrima->tipo_materia_prima_id = 1;      
        $materiaPrima->nombre_materia_prima = 'Insertos de Cartón';
        $materiaPrima->existencias = 10000;
        $materiaPrima->save();

        $materiaPrima = new MateriaPrima();
        $materiaPrima->tipo_materia_prima_id = 2;      
        $materiaPrima->nombre_materia_prima = 'Heat Transfer Reflectivo';
        $materiaPrima->existencias = 1200;
        $materiaPrima->save();

        $materiaPrima = new MateriaPrima();
        $materiaPrima->tipo_materia_prima_id = 3;      
        $materiaPrima->nombre_materia_prima = 'Cintas de Satin';
        $materiaPrima->existencias = 1500;
        $materiaPrima->save();

        $materiaPrima = new MateriaPrima();
        $materiaPrima->tipo_materia_prima_id = 4;      
        $materiaPrima->nombre_materia_prima = 'Papel para impresión';
        $materiaPrima->existencias = 50000;
        $materiaPrima->save();

    }
}
