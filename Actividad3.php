<?php
    $variable_alumno = "Carlos Joel Ixcamparij López - Carné 25006741";
    echo "¡Hola mundo! Soy " . $variable_alumno;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Grid</title>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            width: 50%;
            margin: auto;
            text-align: center;
        }
        .grid-container img {
            width: 100%;
            height: auto;
            max-width: 200px; /* Ensures images do not become too large */
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">Galería de Imágenes Actividad 3</h2>

    <div class="grid-container">
        <?php
            $image_dir = "/Actividad_25006741_Seccion_A/proyecto_php/";
            $images = ["1.jpeg", "2.jpeg", "3.jpeg", "4.jpeg"];

            foreach ($images as $image) {
                echo "<img src='{$image_dir}{$image}' alt='Image'>";
            }
        ?>
    </div>

</body>
</html>
