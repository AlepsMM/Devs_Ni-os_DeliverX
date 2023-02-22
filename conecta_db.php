<?php

// Definir las credenciales de la base de datos
define('DB_SERVER', 'sql301.epizy.com');
define('DB_USERNAME', 'epiz_33513806');
define('DB_PASSWORD', '0NKvTvgI7w');
define('DB_NAME', 'epiz_33513806_deliverx');

// Crear conexión a la base de datos
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificar si la conexión a la base de datos es exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
//define('DB_SERVER', '192.168.69.119');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '1q2w3e4r5t');
//define('DB_NAME', 'tienda_dulces');
?>
