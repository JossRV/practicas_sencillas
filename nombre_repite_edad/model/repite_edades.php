<!-- <?php 
    require_once "../app/config.php";
    require_once "../app/dependencias.php";

    $edad = $_POST['edad'];
    $nombre = $_POST['nombre'];

    $w = 0;
    // echo $edad;
    // echo $nombre;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=TITULO_PAGINA?></title>
</head>
<body>
    <header>
        <nav>
            
        </nav>
    </header>
    <a class="btn btn-outline-dark" href="../index.php">Regresar</a>
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h5>usando for</h5>
                <?php for($i=0; $i < $edad; $i++): ?>
                    <h1 class="display-1"><?=$nombre?></h1>
                <?php endfor; ?>
            </div>
            <div class="col text-center">
                <h5>usando while</h5>
                <?php while($w < $edad): ?>
                    <h1 class="display-1"><?=$nombre?></h1>
                <?php
                    $w++; 
                    endwhile; 
                ?>
            </div>
        </div>
    </div>

</body>
</html> -->