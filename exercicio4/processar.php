<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero'])) {

    $n = (int) $_POST['numero'];

    echo "<h1>Tabuada de {$n}</h1>";
    echo "<ul>";
    for ($mult = 1; $mult <= 10; $mult++) {
        $produto = $n * $mult;
        echo "<li>{$n} x {$mult} = {$produto}</li>";
    }
    echo "</ul>";
    echo "<p><a href='index.php'>Voltar</a></p>";
} else {
    header('Location: index.php');
    exit;
}
?>
