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
            
            $id = $_POST["t1"];
            $nom = $_POST["t2"];
            $cta = $_POST["t3"];
            $dir = $_POST["t4"];
            
            $sql = "insert into clientes values('$id','$nom','$cta','$dir',0)";   
            $res = mysqli_query($bd, $sql);
            if (!$res){
                echo "Error en el registro del nuevo cliente<br>";
                echo mysqli_error($bd);
            }
            else{
                echo "Registro adicionado con éxito";
            }
            mysqli_close($bd);
        ?>
        <br>
        <a href="index.php">Volver al inicio</a>
    </body>
</html>
