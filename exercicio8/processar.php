<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vendas'])) {

    $nomeDias = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
    $valores = $_POST['vendas'];
    $qtdDias = count($valores);

    $somaSemana = 0;
    for ($i = 0; $i < $qtdDias; $i++) {
        $valores[$i] = (float) $valores[$i];
        $somaSemana += $valores[$i];
    }

    $mediaSemana = $somaSemana / $qtdDias;
    $pico = $valores[0];
    $diaPico = $nomeDias[0];
    $acima = 0;

    for ($i = 0; $i < $qtdDias; $i++) {
        if ($valores[$i] > $pico) {
            $pico = $valores[$i];
            $diaPico = $nomeDias[$i];
        }
        if ($valores[$i] > $mediaSemana) {
            $acima++;
        }
    }

    echo "<h1>Faturamento da semana</h1>";
    echo "<ul>";
    for ($i = 0; $i < $qtdDias; $i++) {
        echo "<li>{$nomeDias[$i]}: R$ " . number_format($valores[$i], 2, ',', '.') . "</li>";
    }
    echo "</ul>";
    echo "<p><strong>Total:</strong> R$ " . number_format($somaSemana, 2, ',', '.') . "</p>";
    echo "<p><strong>Maior faturamento:</strong> {$diaPico} (R$ " . number_format($pico, 2, ',', '.') . ")</p>";
    echo "<p><strong>Média:</strong> R$ " . number_format($mediaSemana, 2, ',', '.') . "</p>";
    echo "<p><strong>Dias acima da média:</strong> {$acima}</p>";
    echo "<p><a href='index.php'>Voltar</a></p>";
} else {
    header('Location: index.php');
    exit;
}
?>
