<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TriggerVentasAnular extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



      // $procedure = "
      // CREATE FUNCTION  f_updStockVentaAnular() RETURNS TRIGGER AS ventas
      // BEGIN
      //   UPDATE productos p
      //   INNER JOIN venta_detalles dv
      //    on dv.producto_id = p.id
      //   and dv.venta.id = new.id
      //   set p.stock  = p.stock + dv.cantidad;
      // END;
      // ";

      // $trigger = "    CREATE  TRIGGER tr_updStockVentaAnular AFTER UPDATE ON ventas
      // FOR EACH ROW EXECUTE PROCEDURE f_updStockVentaAnular();";

      // DB::unprepared("DROP procedure IF EXISTS procedure_name");
      // DB::unprepared($procedure);
      // DB::unprepared($trigger);

      /* ---------------------------- pstgres --------------------------- */
    //   DB::unprepared('CREATE FUNCTION venta_anular() RETURNS trigger AS $venta_anular$
    //   BEGIN
    //   UPDATE productos p

    //   SET p.stock  = p.stock + dv.cantidad

    //   FROM   venta_detalles dv
    //   WHERE  dv.producto_id = p.id
    //   AND    dv.venta_id = new.id;
    //   RETURN NEW;
    //   END;
    //   $venta_anular$ LANGUAGE plpgsql;

    //   CREATE  TRIGGER tr_updStockVentaAnular AFTER UPDATE ON ventas
    //   FOR EACH ROW EXECUTE PROCEDURE venta_anular()
    // ');


       DB::unprepared('
       CREATE  TRIGGER tr_updStockVentaAnular AFTER UPDATE ON ventas
         FOR EACH ROW
         BEGIN
         UPDATE productos p
         INNER JOIN venta_detalles dv
         on dv.producto_id = p.id
         and dv.venta.id = new.id
         set p.stock  = p.stock + dv.cantidad;
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
      DB::unprepared('DROP TRIGGER `tr_updStockVentaAnular`');
    }
}
