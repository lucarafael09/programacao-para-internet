<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['notas'])) {

    $listaNotas = $_POST['notas'];
    $qtdNotas = count($listaNotas);

    for ($i = 0; $i < $qtdNotas; $i++) {
        $listaNotas[$i] = (float) $listaNotas[$i];
    }

    $mediaFinal = array_sum($listaNotas) / $qtdNotas;

    if ($mediaFinal >= 7) {
        $status = 'Aprovado';
    } elseif ($mediaFinal >= 5) {
        $status = 'Recuperação';
    } else {
        $status = 'Reprovado';
    }

    echo "<h1>Média do aluno</h1>";
    echo "<ul>";
    for ($i = 0; $i < $qtdNotas; $i++) {
        echo "<li>Nota " . ($i + 1) . ": " . number_format($listaNotas[$i], 1, ',', '.') . "</li>";
    }
    echo "</ul>";
    echo "<p><strong>Média:</strong> " . number_format($mediaFinal, 2, ',', '.') . "</p>";
    echo "<p><strong>Situação:</strong> {$status}</p>";
    echo "<p><a href='index.php'>Voltar</a></p>";
} else {
    header('Location: index.php');
    exit;
}
?>
