<?php
/* Conectar a una base de datos de MySQL invocando al controlador */
$dsn = 'mysql:dbname=curso_laboratorio;host=localhost';
$usuario = 'root';
$contrasena = '';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

class conexionDB
{
    public function conexioPDO()
    {
        $host='localhost';
        $usuario = 'root';
        $contrasena = '';
        $dbName='curso_laboratorio';
        try {
            $pdo=new PDO("mysql:host=$host;dbname=$dbName",$usuario,$contrasena);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
            return $pdo;
        } catch (Exception $e) {
            echo "La conexion ha fallado"; 
        }
    }

    function cerrar_conexion()
    {
        $this->$pdo=null;
    }


}


?>