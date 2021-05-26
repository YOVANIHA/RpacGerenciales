<?php

use Illuminate\Database\Seeder;
use App\Aduana;
class AduanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aduana = new Aduana();
        $aduana->nombre_aduana='El Poy';
        $aduana->codigo_aduana = 'AD01';
        $aduana->save();

        $aduana = new Aduana();
        $aduana->nombre_aduana='San Bartolo';
        $aduana->codigo_aduana = 'AD02';
        $aduana->save();
        
    }
}
