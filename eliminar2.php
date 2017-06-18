<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultados</title>
    </head>
    <body>
        <h1>Resultado</h1>
        <?php
            include './conecta.php';
            $bd = conectar();
            
            $xid = $_GET["victima"];
           
            $sql = "delete from clientes where id_cli='$xid'";   
            $res = mysqli_query($bd, $sql);
            if (!$res){
                echo "Error en la eliminacion<br>";
                echo mysqli_error($bd);
            }
            else{
                echo "Registro eliminado con éxito";
            }
            mysqli_close($bd);
        ?>
        <br>
        <a href="index.php">Volver al inicio</a>
    </body>
</html>
