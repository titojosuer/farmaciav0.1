DELIMITER//
CREATE OR REPLACE TRIGGER tr_updStockCompra AFTER INSERT ON detalle_pedido
FOR EACH ROW BEGIN
UPDATE productos SET stock  = stock + NEW.cantidad
WHERE productos.id = NEW.id_producto;
END; //

DELIMITER  //
CREATE  TRIGGER tr_updStockCompraAnular AFTER UPDATE ON pedidos
  for EACH ROW
  BEGIN
  UPDATE productos p
   JOIN detalle_pedido di
   ON di.id_producto = p.id
   AND di.pedido_id  = new.id
   SET p.stock = p.stock-di.cantidad;
    end; //


    DELIMITER  //
    CREATE  TRIGGER tr_updStockVenta AFTER INSERT ON venta_detalles
      for EACH ROW
      BEGIN
      UPDATE productos
      SET stock = stock - new.cantidad
      where productos.id = NEW.producto_id;
        end; //

        DELIMITER  //
        CREATE  TRIGGER tr_updStockVentaAnular AFTER UPDATE ON ventas
          for EACH ROW
          BEGIN
          UPDATE productos p
          JOIN venta_detalles dv
          on dv.producto_id = p.id
          and dv.venta.id = new.id
          set p.stock  = p.stock + dv.cantidad;
            end; //
