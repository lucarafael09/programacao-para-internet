<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Notas da turma</title>
</head>
<body>
    <h1>Notas da turma</h1>
    <p>Nome e duas notas de três alunos.</p>
    
    <form action="processar.php" method="POST">
        <?php for ($i = 0; $i < 3; $i++): ?>
            <div>
                <strong>Aluno <?= $i + 1 ?>:</strong><br>
                <label for="nome_<?= $i ?>">Nome:</label>
                <input 
                    type="text" 
                    id="nome_<?= $i ?>" 
                    name="nomes[]" 
                    required
                >
                <br><br>
                <label for="nota1_<?= $i ?>">Nota 1:</label>
                <input 
                    type="number" 
                    id="nota1_<?= $i ?>" 
                    name="nota1[]" 
                    step="0.1" 
                    min="0" 
                    max="10" 
                    required
                >
                <label for="nota2_<?= $i ?>">Nota 2:</label>
                <input 
                    type="number" 
                    id="nota2_<?= $i ?>" 
                    name="nota2[]" 
                    step="0.1" 
                    min="0" 
                    max="10" 
                    required
                >
            </div>
            <br>
            <hr>
        <?php endfor; ?>
        
        <button type="submit">Calcular Médias</button>
    </form>
</body>
</html>
