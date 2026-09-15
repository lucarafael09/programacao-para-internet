<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['peso'], $_POST['altura'])) {

    $pesoKg = (float) $_POST['peso'];
    $alturaM = (float) $_POST['altura'];
    $imc = $pesoKg / ($alturaM * $alturaM);

    if ($imc < 18.5) {
        $faixa = 'Abaixo do peso';
    } elseif ($imc < 25) {
        $faixa = 'Peso normal';
    } elseif ($imc < 30) {
        $faixa = 'Sobrepeso';
    } else {
        $faixa = 'Obesidade';
    }

    echo "<h1>IMC</h1>";
    echo "<p><strong>Peso informado:</strong> " . number_format($pesoKg, 2, ',', '.') . " kg</p>";
    echo "<p><strong>Altura informada:</strong> " . number_format($alturaM, 2, ',', '.') . " m</p>";
    echo "<p><strong>Índice:</strong> " . number_format($imc, 2, ',', '.') . "</p>";
    echo "<p><strong>Categoria:</strong> {$faixa}</p>";
    echo "<p><a href='index.php'>Voltar</a></p>";
} else {
    header('Location: index.php');
    exit;
}
?>
