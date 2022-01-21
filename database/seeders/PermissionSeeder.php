<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
          'permission_index',
          'permission_create',
          'permission_show',
          'permission_edit',
          'permission_destroy',

          'role_index',
          'role_create',
          'role_show',
          'role_edit',
          'role_destroy',

          'user_index',
          'user_create',
          'user_show',
          'user_edit',
          'user_destroy',

          'producto_index',
          'producto_create',
          'producto_show',
          'producto_edit',
          'producto_destroy',

          'categoria_index',
          'categoria_create',
          'categoria_show',
          'categoria_edit',
          'categoria_destroy',

          'venta_index',
          'venta_create',
          'venta_show',
          'venta_edit',
          'venta_destroy',

          'compra_index',
          'compra_create',
          'compra_show',
          'compra_edit',
          'compra_destroy',

          'cliente_index',
          'cliente_create',
          'cliente_show',
          'cliente_edit',
          'cliente_destroy',

          'impresora_index',
          'impresora_create',
          'impresora_show',
          'impresora_edit',
          'impresora_destroy',

          'empresa_index',
          'empresa_create',
          'empresa_show',
          'empresa_edit',
          'empresa_destroy',

          'proveedor_index',
          'proveedor_create',
          'proveedor_show',
          'proveedor_edit',
          'proveedor_destroy',
        ];

        foreach ($permissions as $permission) {
           Permission::create([
               'name' => $permission
           ]);
       }
    }
}
