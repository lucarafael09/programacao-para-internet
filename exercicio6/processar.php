<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idades'], $_POST['alturas'])) {

    $listaIdades = $_POST['idades'];
    $listaAlturas = $_POST['alturas'];
    $qtd = count($listaIdades);

    $maxAlt = (float) $listaAlturas[0];
    $minAlt = (float) $listaAlturas[0];
    $somaAdultos = 0;
    $qtdAdultos = 0;

    for ($i = 0; $i < $qtd; $i++) {
        $idadeAtual = (int) $listaIdades[$i];
        $alturaAtual = (float) $listaAlturas[$i];

        if ($alturaAtual > $maxAlt) {
            $maxAlt = $alturaAtual;
        }
        if ($alturaAtual < $minAlt) {
            $minAlt = $alturaAtual;
        }

        if ($idadeAtual > 18) {
            $somaAdultos += $alturaAtual;
            $qtdAdultos++;
        }
    }

    echo "<h1>Estatísticas de altura</h1>";
    echo "<p><strong>Maior altura:</strong> " . number_format($maxAlt, 2, ',', '.') . " m</p>";
    echo "<p><strong>Menor altura:</strong> " . number_format($minAlt, 2, ',', '.') . " m</p>";

    if ($qtdAdultos > 0) {
        $mediaAdultos = $somaAdultos / $qtdAdultos;
        echo "<p><strong>Média (mais de 18 anos):</strong> " . number_format($mediaAdultos, 2, ',', '.') . " m</p>";
        echo "<p><strong>Pessoas com mais de 18:</strong> {$qtdAdultos}</p>";
    } else {
        echo "<p><strong>Média (mais de 18 anos):</strong> não há pessoas nessa faixa.</p>";
    }

    echo "<p><a href='index.php'>Voltar</a></p>";
} else {
    header('Location: index.php');
    exit;
}
?>
