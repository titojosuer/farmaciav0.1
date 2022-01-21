<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TriggerComprasAnular extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


    //   DB::unprepared('CREATE FUNCTION compras_anular() RETURNS trigger AS $compras_anular$
    //   BEGIN
    //   UPDATE productos p

    //   SET p.stock = p.stock-di.cantidad

    //   FROM detalle_pedido di
    //   WHERE  di.id_producto = p.id
    //   AND di.pedido_id  = new.id
    //   AND p.stock>0;
    //   RETURN NEW;
    //   END;
    //   $compras_anular$ LANGUAGE plpgsql;

    //   CREATE  TRIGGER tr_updStockCompraAnular AFTER UPDATE ON pedidos
    //   FOR EACH ROW EXECUTE PROCEDURE compras_anular()
    // ');


     DB::unprepared('
     CREATE  TRIGGER tr_updStockCompraAnular AFTER UPDATE ON pedidos
       for EACH ROW
       BEGIN
       UPDATE productos p
        JOIN detalle_pedido di
        ON di.id_producto = p.id
        AND di.pedido_id  = new.id
        SET p.stock = p.stock-di.cantidad
        WHERE p.stock>0;
     END
      ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    DB::unprepared('DROP TRIGGER `tr_updStockCompraAnular`');
    }
}
