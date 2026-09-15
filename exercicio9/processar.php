<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nomes'], $_POST['nota1'], $_POST['nota2'])) {

    $nomesAlunos = $_POST['nomes'];
    $primeiraNota = $_POST['nota1'];
    $segundaNota = $_POST['nota2'];

    $alunos = [];
    for ($i = 0; $i < 3; $i++) {
        $alunos[$i][0] = $nomesAlunos[$i];
        $alunos[$i][1] = (float) $primeiraNota[$i];
        $alunos[$i][2] = (float) $segundaNota[$i];
    }

    echo "<h1>Notas da turma</h1>";
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>Nome</th><th>Nota 1</th><th>Nota 2</th><th>Média</th></tr>";

    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            if ($j == 0) {
                echo "<td>" . htmlspecialchars($alunos[$i][$j]) . "</td>";
            } else {
                echo "<td>" . number_format($alunos[$i][$j], 1, ',', '.') . "</td>";
            }
        }
        $mediaAluno = ($alunos[$i][1] + $alunos[$i][2]) / 2;
        echo "<td>" . number_format($mediaAluno, 2, ',', '.') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<p><a href='index.php'>Voltar</a></p>";
} else {
    header('Location: index.php');
    exit;
}
?>
