<?php

namespace Database\Seeders;

use App\Models\impresora;
use Illuminate\Database\Seeder;

class ImpresoraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      impresora::create([
        'nombre'=>'epson',
      ]);
    }
}
