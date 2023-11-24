<?php
    session_start();
    require_once "../includes/config.php";

    $sqlCarrito = "SELECT carritos.id AS 'cartID', carritos.producto_id, productos.precio, carritos.cantidad
                   FROM carritos
                   INNER JOIN productos ON carritos.producto_id = productos.id
                   WHERE carritos.usuario_id = '" . $_SESSION['USER'][0]['id'] . "';";

    $resultCarrito = mysqli_query($conn, $sqlCarrito);
    if(!$resultCarrito){
        echo 2;
        die();
    }

    $rowsCarrito = mysqli_fetch_all($resultCarrito, MYSQLI_ASSOC);

    //var_dump($rowsCarrito);
    
    foreach ($rowsCarrito as $rowCarrito) {

        $sqlStock = "SELECT stock FROM productos WHERE id = " . $rowCarrito['producto_id'] . ";";

        $resultStock = mysqli_query($conn, $sqlStock);

        $rowStock = mysqli_fetch_array($resultStock, MYSQLI_ASSOC);

        if($rowStock['stock'] > 0){
            $sqlCompra = "INSERT INTO compras VALUES(null, ".$_SESSION['USER'][0]['id'].", '".$rowCarrito['producto_id']."', 'No Enviado', '".($rowCarrito['precio'] * $rowCarrito['cantidad'])."', 'Efectivo', '".$rowCarrito['cantidad']."', NOW());";
            if(!mysqli_query($conn, $sqlCompra)){
                echo 2;
                die();
            }


            $sqlActStock = "UPDATE productos SET stock = stock - ".$rowCarrito['cantidad']." WHERE id = ".$rowCarrito['producto_id'].";";
            if(!mysqli_query($conn, $sqlActStock)){
                echo 2;
                die();
            }

            $sqlResetCart = "DELETE FROM carritos WHERE id = " . $rowCarrito['cartID'].";";
            if(!mysqli_query($conn, $sqlResetCart)){
                echo 2;
                die();
            }
        }
    }

    echo 1;

?>