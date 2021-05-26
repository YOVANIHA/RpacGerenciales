<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TipoReporteSeeder::class);
        $this->call(AduanaSeeder::class);
        $this->call(ProveedorSeeder::class);
        $this->call(TipoMateriaPrimaSeeder::class);
        $this->call(MateriaPrimaSeeder::class);
        $this->call(OrdenDeCompraSeeder::class);
        $this->call(ProcesoImportacionSeeder::class);
        $this->call(DeclaracionSeeder::class);
        $this->call(DocumentoTransporteSeeder::class);
        $this->call(FacturaSeeder::class);
        $this->call(FacturaMateriaPrimaSeeder::class);

    }
}
