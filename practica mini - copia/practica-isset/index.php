<!-- tarea: crear las demas funciones, agregar que todo funcione 
validar los inputs con php-->
<!-- isset es para cuando la variable esta vacia o te marca un error -->
<!-- <?php 

    // $entero=12;
    // $booleano=true;
    // $cadena="Hola XD";
    // $decimal=1.2;
    // $caracter='@';

    // for($i=0;$i<5;$i++):

?>

    <h1>El resultado es: <?php //echo $entero ?></h1>
    <h1>El resultado del boolean es: <?php //echo $booleano ?></h1>
    <h1>El resultado es: <?php //echo $caracter ?></h1>
    <h1>El resultado es: <?php //echo $cadena ?></h1>
    <h1>El resultado es: <?php //echo $decimal ?></h1>

<?php 
    // endfor;
?> -->
    <!-- 
<?php 
    // $arreglo=array();
    // $arreglo[0]=$entero;
    // $arreglo[1]=$booleano;
    // $arreglo[2]=$cadena;
    // $arreglo[3]=$decimal;
    // $arreglo[4]=$caracter;

    // var_dump($arreglo);

    // for($i=0; $i<count($arreglo); $i++):
    //     echo "<h".($i+1).">".$arreglo[$i];
    // endfor;
?> -->
<?php 

    if (isset($_POST['dato1']) && isset($_POST['dato2']) && isset($_POST['dato3'])) {
        if(is_numeric($_POST['dato1']) && is_numeric($_POST['dato2']) && is_numeric($_POST['dato3'])){    
            $opcion = $_POST['opcion'];
            $valor1 = $_POST['dato1'];
            $valor2 = $_POST['dato2'];
            $valor3 = $_POST['dato3'];
            // echo $opcion; 
            switch($opcion){
                case'suma':
                    $resultado= $valor1 + $valor2 + $valor3;
                    break;
                case "resta":
                    $resultado= $valor1 - $valor2 - $valor3;
                    break;
                case "multiplicacion":
                    $resultado= $valor1 * $valor2 * $valor3;
                    break;
                case "division":
                    $resultado= $valor1 / $valor2 / $valor3;
                    break;
            }
        }else{
            echo '<script>
                    alert("Checa que los datos sean numericos");
                 </script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
    <?php require 'app/dependencias.php'; ?>
</head>
<body>
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 mt-5 border">
                <h1>Calculadora</h1>
                <form action="index.php" method="post">
                    <select name="opcion" id="" class="form-control mt-2 text-center">
                        <option value="suma">suma</option>
                        <option value="resta" >resta</option>
                        <option value="multiplicacion">multiplicacion</option>
                        <option value="division">division</option>
                    </select>
                    <input type="text" class="form-control mt-2 text-center" name="dato1" placeholder ="Escriba un numero">
                    <input type="text" class="form-control mt-2 text-center" name="dato2" placeholder ="Escriba un numero">
                    <input type="text" class="form-control mt-2 text-center" name="dato3" placeholder ="Escriba un numero">
                    <button type="submit" class="btn btn-outline-dark container-fluid mt-2">Sumar</button>
                    <input type="number" class="form-control mt-2 mb-2 text-center" value="<?=$resultado?>" disabled>
                </form>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</body>
</html>