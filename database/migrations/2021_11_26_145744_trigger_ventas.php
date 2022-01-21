<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TriggerVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


    //   DB::unprepared('CREATE FUNCTION ventas() RETURNS trigger AS $ventas$
    //   BEGIN
    //   UPDATE productos
    //   SET stock = stock - new.cantidad
    //   where productos.id = NEW.producto_id;
    //   RETURN NEW;
    //   END;
    //   $ventas$ LANGUAGE plpgsql;

    //   CREATE TRIGGER tr_updStockVenta AFTER INSERT ON venta_detalles
    //   FOR EACH ROW EXECUTE PROCEDURE ventas()
    // ');


     DB::unprepared('
     CREATE TRIGGER tr_updStockVenta AFTER INSERT ON venta_detalles
       FOR EACH ROW
       BEGIN
       UPDATE productos
       SET stock = stock - new.cantidad
       where productos.id = NEW.producto_id;
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
       DB::unprepared('DROP TRIGGER `tr_updStockVenta`');
    }
}
