<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $capital = 1000.00;
    $jurosMes = 0.015;
    $periodo = 12;

    echo "<h1>Juros compostos</h1>";
    echo "<p><strong>Capital inicial:</strong> R$ " . number_format($capital, 2, ',', '.') . "</p>";
    echo "<p><strong>Taxa:</strong> 1,5% ao mês</p>";
    echo "<p><strong>Duração:</strong> {$periodo} meses</p>";
    echo "<ul>";

    for ($m = 1; $m <= $periodo; $m++) {
        $ganho = $capital * $jurosMes;
        $capital += $ganho;
        echo "<li>Mês {$m}: rendeu R$ " . number_format($ganho, 2, ',', '.') .
             " — saldo: R$ " . number_format($capital, 2, ',', '.') . "</li>";
    }

    echo "</ul>";
    echo "<p><strong>Saldo ao final:</strong> R$ " . number_format($capital, 2, ',', '.') . "</p>";
    echo "<p><a href='index.php'>Voltar</a></p>";
} else {
    header('Location: index.php');
    exit;
}
?>
