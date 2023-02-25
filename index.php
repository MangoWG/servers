<?php
$contactos = [
    ["nombre" => "Pepe"],
    ["nombre" => "Juan"],
    ["nombre" => "Marcos"],
    ["nombre" => "Maria"],
    ["nombre" => "Paco"]
]
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="static/css/hola.css">
    <title>hola</title>
</head>

<body>
    <div class="container">
        <?php
        foreach ($contactos as $contactos) {
        ?>
            <div class="cajon">
                <div class="caja">
                    <div class="nombre"><?= $contactos["nombre"] ?> </div>
                    <div class="boton">
                        <input type="button" class="pulsar">
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>