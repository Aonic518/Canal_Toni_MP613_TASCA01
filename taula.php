<?php

require 'dades.php';

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca - Taula</title>
</head>

<body>

    <h1>Biblioteca en format taula</h1>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Títol</th>
            <th>Autor</th>
            <th>Any</th>
            <th>Gènere</th>
            <th>Llegit</th>
            <th>Valoració</th>
        </tr>

        <?php foreach ($biblioteca as $llibre): ?>

            <tr>

                <td><?php echo $llibre['id']; ?></td>

                <td><?php echo $llibre['titol']; ?></td>

                <td><?php echo $llibre['autor']; ?></td>

                <td><?php echo $llibre['any']; ?></td>

                <td><?php echo $llibre['genere']; ?></td>

                <td>
                    <?php
                    echo $llibre['llegit'] ? 'Sí' : 'No';
                    ?>
                </td>

                <td><?php echo $llibre['valoracio']; ?>/5</td>

            </tr>

        <?php endforeach; ?>

    </table>

    <p>
        <a href="index.php">Tornar a l'inici</a>
    </p>

</body>
</html>