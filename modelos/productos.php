<?php
    /* --------- PENDIENTE: FUNCIONALIDAD DE "ORDENAR POR:" ---------- */

    $sql = "SELECT * FROM productos ORDER BY RAND() LIMIT 15";
    
    $query = mysqli_query($conn, $sql);
    
    if(!$query){
        die('Hubo un error en la consulta: ' . mysqli_error($conn));
    }
    
    $productos = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>