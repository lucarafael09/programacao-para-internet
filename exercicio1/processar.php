<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor'], $_POST['codigo'])) {

    $valorCompra = (float) $_POST['valor'];
    $codCliente = (int) $_POST['codigo'];

    switch ($codCliente) {
        case 1:
            $tipo = 'Cliente Comum';
            $perc = 5;
            break;
        case 2:
            $tipo = 'VIP';
            $perc = 10;
            break;
        case 3:
            $tipo = 'Funcionário';
            $perc = 15;
            break;
        default:
            echo "<h1>Erro</h1>";
            echo "<p>Código inválido.</p>";
            echo "<p><a href='index.php'>Voltar</a></p>";
            exit;
    }

    $valorDesconto = $valorCompra * ($perc / 100);
    $aPagar = $valorCompra - $valorDesconto;

    echo "<h1>Desconto calculado</h1>";
    echo "<p><strong>Cliente:</strong> {$tipo}</p>";
    echo "<p><strong>Compra:</strong> R$ " . number_format($valorCompra, 2, ',', '.') . "</p>";
    echo "<p><strong>Desconto:</strong> {$perc}%</p>";
    echo "<p><strong>Valor descontado:</strong> R$ " . number_format($valorDesconto, 2, ',', '.') . "</p>";
    echo "<p><strong>Total a pagar:</strong> R$ " . number_format($aPagar, 2, ',', '.') . "</p>";
    echo "<p><a href='index.php'>Voltar</a></p>";
} else {
    header('Location: index.php');
    exit;
}
?>
