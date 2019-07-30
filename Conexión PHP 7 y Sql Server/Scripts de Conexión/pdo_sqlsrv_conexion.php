<?php
    $dsn = "sqlsrv:Server=localhost;Database=usuarios";
    $conn = new PDO($dsn, "crud", "123456");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $sql = "SELECT * FROM tabla_usuarios";

    foreach ($conn->query($sql) as $row) {
        print_r($row);
    } 