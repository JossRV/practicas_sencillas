<?php 
    require_once "app/config.php";
    require_once "app/dependencias.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=TITULO_PAGINA?></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="model/repite_edades.php" method="post">
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" placeholder="edad" name="edad">
                        <label for="">Cual es tu edad</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" placeholder="nombre" name="nombre">
                        <label for="">Cual es tu nombre</label>
                    </div>
                    <button type="submit" class="btn btn-outline-dark mt-3 container-fluid">Repitelo</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>