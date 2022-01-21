<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TriggerCompras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    //   DB::unprepared('CREATE FUNCTION compras() RETURNS trigger AS $compras$
    //   BEGIN
    //   UPDATE productos SET stock  = stock + NEW.cantidad
    //   WHERE productos.id = NEW.id_producto;
    //   RETURN NEW;
    //   END;
    //   $compras$ LANGUAGE plpgsql;

    //   CREATE TRIGGER tr_updStockCompra AFTER INSERT ON detalle_pedido
    //   FOR EACH ROW EXECUTE PROCEDURE compras()
    // ');

       DB::unprepared('
       CREATE TRIGGER tr_updStockCompra AFTER INSERT ON detalle_pedido
       FOR EACH ROW
       BEGIN
       UPDATE productos SET stock  = stock + NEW.cantidad
       WHERE productos.id = NEW.id_producto;
       END ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          DB::unprepared('DROP TRIGGER `tr_updStockCompra`');
    }
}
