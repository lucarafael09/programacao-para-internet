<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lado_a'], $_POST['lado_b'], $_POST['lado_c'])) {

    $ladoA = (float) $_POST['lado_a'];
    $ladoB = (float) $_POST['lado_b'];
    $ladoC = (float) $_POST['lado_c'];

    echo "<h1>Classificação do triângulo</h1>";
    echo "<p><strong>Lados:</strong> " .
         number_format($ladoA, 2, ',', '.') . ", " .
         number_format($ladoB, 2, ',', '.') . " e " .
         number_format($ladoC, 2, ',', '.') . "</p>";

    $formaTriangulo = ($ladoA + $ladoB > $ladoC) && ($ladoA + $ladoC > $ladoB) && ($ladoB + $ladoC > $ladoA);

    if ($formaTriangulo) {
        if ($ladoA == $ladoB && $ladoB == $ladoC) {
            $classificacao = 'Equilátero (três lados iguais)';
        } elseif ($ladoA == $ladoB || $ladoA == $ladoC || $ladoB == $ladoC) {
            $classificacao = 'Isósceles (dois lados iguais)';
        } else {
            $classificacao = 'Escaleno (três lados diferentes)';
        }

        echo "<p><strong>Forma um triângulo:</strong> sim</p>";
        echo "<p><strong>Tipo:</strong> {$classificacao}</p>";
    } else {
        echo "<p><strong>Forma um triângulo:</strong> não</p>";
        echo "<p>A soma de dois lados precisa ser maior que o terceiro.</p>";
    }

    echo "<p><a href='index.php'>Voltar</a></p>";
} else {
    header('Location: index.php');
    exit;
}
?>
