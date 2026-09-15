<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $grid = [];
    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 3; $coluna++) {
            $grid[$linha][$coluna] = rand(1, 99);
        }
    }

    $soma = 0;
    for ($k = 0; $k < 3; $k++) {
        $soma += $grid[$k][$k];
    }

    echo "<h1>Matriz 3×3</h1>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    for ($linha = 0; $linha < 3; $linha++) {
        echo "<tr>";
        for ($coluna = 0; $coluna < 3; $coluna++) {
            if ($linha == $coluna) {
                echo "<td><strong>" . $grid[$linha][$coluna] . "</strong></td>";
            } else {
                echo "<td>" . $grid[$linha][$coluna] . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<p><strong>Diagonal:</strong> {$grid[0][0]} + {$grid[1][1]} + {$grid[2][2]}</p>";
    echo "<p><strong>Soma:</strong> {$soma}</p>";
    echo "<p><a href='index.php'>Gerar outra matriz</a></p>";
} else {
    header('Location: index.php');
    exit;
}
?>
