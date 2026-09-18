<?php

require 'dades.php';

const MAX_VALORACIO = 5;

$llibresLlegits = 0;
$llibresNoLlegits = 0;

foreach ($biblioteca as $llibre) {

    if ($llibre['llegit']) {
        $llibresLlegits++;
    } else {
        $llibresNoLlegits++;
    }
}

$sumaValoracions = 0;
$valoracioMitjana = 0;

foreach ($biblioteca as $llibre) {

    if ($llibre['llegit']) {
        $sumaValoracions += $llibre['valoracio'];
    }
}

if ($llibresLlegits > 0) {
    $valoracioMitjana = round($sumaValoracions / $llibresLlegits, 1);
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Gestor de Biblioteca</title>
</head>

<body>

    <h1>Gestor de Biblioteca Personal</h1>

    <p>Benvingut al gestor de la meva biblioteca.</p>

    <h2>Estadístiques de la biblioteca</h2>

    <p>
        Llibres llegits: <?php echo $llibresLlegits; ?>
    </p>

    <p>
        Llibres no llegits: <?php echo $llibresNoLlegits; ?>
    </p>

    <p>
        Valoració mitjana dels llibres llegits:
        <?php echo number_format($valoracioMitjana, 1); ?>/<?php echo MAX_VALORACIO; ?>
    </p>

    <h2>Vistes disponibles</h2>

    <ul>
        <li>
            <a href="llista.php">Veure biblioteca en llista</a>
        </li>

        <li>
            <a href="taula.php">Veure biblioteca en taula</a>
        </li>
    </ul>

</body>
</html>