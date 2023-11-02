<?php
    /* --------- PENDIENTE: FUNCIONALIDAD DE "ORDENAR POR:" ---------- */

    $categ = $_GET['categ'];

    $sql = "SELECT * FROM productos
            INNER JOIN categorias ON productos.categoria_id = categorias.id
            WHERE categorias.nombre = '" . $categ . "'
            ORDER BY RAND() LIMIT 15";
    
    $query = mysqli_query($conn, $sql);
    
    if(!$query){
        die('Hubo un error en la consulta: ' . mysqli_error($conn));
    }
    
    $productos = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>