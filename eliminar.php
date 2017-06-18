<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Eliminar Cliente</h1>
        <form method="get" action="eliminar2.php">
            <label>Seleccione un cliente de la lista</label>
            <br>
            <?php
                include "./conecta.php";
                $bd = conectar();
                $sql = "select id_cli, nomcli from clientes order by nomcli";
                $res = mysqli_query($bd, $sql);
                while ($arr = mysqli_fetch_array($res)){
                    echo "<br><input type='radio' value='$arr[0]' name='victima'>";        
                    echo "$arr[1]";
                }
                mysqli_close($bd);
            ?>
            <hr>
            <input type="submit" value="Eliminar">
        </form>
    </body>
</html>
