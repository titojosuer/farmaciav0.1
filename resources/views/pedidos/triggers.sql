DELIMITTER//

CREATE TRIGGER `tr_updStockCompra` AFTER INSERT ON `detalle_pedido`
FOR EACH ROW BEGIN
UPDATE productos SET stock = stock + NEW.cantidad
where productos.id = NEW.id_producto;
END;

DELIMITTER ;


DELIMITTER//

CREATE or REPLACE TRIGGER `tr_updStockCompraAnular` AFTER UPDATE ON `pedidos`
FOR EACH ROW BEGIN
UPDATE productos p
join detalle_pedido di
on di.id_producto = p.id
and di.pedido_id  = new.id
SET stock = stock - di.cantidad;
END;

DELIMITTER ;

DELIMITER //
CREATE TRIGGER `tr_updStockVenta` AFTER INSERT ON `venta_detalles`
FOR EACH ROW BEGIN
UPDATE productos SET stock = stock - NEW.cantidad
WHERE productos.id = NEW.id_producto
END;
//
DELIMITER ;
