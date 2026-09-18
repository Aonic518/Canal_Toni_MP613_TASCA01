<?php

require 'dades.php';

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca - Llista</title>
</head>

<body>

    <h1>Biblioteca en format llista</h1>

    <ul>

        <?php foreach ($biblioteca as $llibre): ?>

            <li>
                <strong><?php echo $llibre['titol']; ?></strong><br>

                Autor: <?php echo $llibre['autor']; ?><br>

                Any: <?php echo $llibre['any']; ?><br>

                Gènere: <?php echo $llibre['genere']; ?><br>

                Llegit:
                <?php
                echo $llibre['llegit'] ? 'Sí' : 'No';
                ?>
                <br>

                Valoració: <?php echo $llibre['valoracio']; ?>/5
            </li>

            <br>

        <?php endforeach; ?>

    </ul>

    <p>
        <a href="index.php">Tornar a l'inici</a>
    </p>

</body>
</html>