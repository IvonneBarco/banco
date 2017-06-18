<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa Banco</title>
    </head>
    <body>
        <h1>Base de datos Banco</h1>
        <h3>Menú</h3>
        <a href="adicionar.html">Adiciona Cliente</a>
        <a href="eliminar.php">Elimina Cliente</a>
        <hr>
        <h3>Clientes registrados</h3>
        <ol>
        <?php
            //phpinfo();
            include "./conecta.php";
            $bd = conectar();
            $sql = "select * from clientes order by nomcli";
            $res = mysqli_query($bd, $sql);
            while ($arr = mysqli_fetch_array($res)){
                echo "<li>$arr[1] ($arr[3]) <b>Saldo: $ $arr[4]</b>";
            }
            mysqli_close($bd);
        ?>
        </ol>
    </body>
</html>
