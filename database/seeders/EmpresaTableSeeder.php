<?php

namespace Database\Seeders;
use App\Models\empresa;
use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        empresa::create([
          'nombre'=>'Nombre de la empresa',
          'descripcion'=>"descripcion corta de la empresa",
          'logo'=>'logo.png',
          'correo'=>'empresa@gmail.com',
          'telefono'=>'12345',
          'direccion'=>'talanga',
        ]);
    }
}
