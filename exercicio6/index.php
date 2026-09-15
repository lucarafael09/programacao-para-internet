<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Alturas</title>
</head>
<body>
    <h1>Estatísticas de altura</h1>
    <p>Preencha idade e altura das 10 pessoas.</p>
    
    <form action="processar.php" method="POST">
        <?php for ($i = 0; $i < 10; $i++): ?>
            <div>
                <strong>Pessoa <?= $i + 1 ?>:</strong>
                <label for="idade_<?= $i ?>">Idade:</label>
                <input 
                    type="number" 
                    id="idade_<?= $i ?>" 
                    name="idades[]" 
                    min="1" 
                    required
                >
                <label for="altura_<?= $i ?>">Altura (m):</label>
                <input 
                    type="number" 
                    id="altura_<?= $i ?>" 
                    name="alturas[]" 
                    step="0.01" 
                    min="0.01" 
                    required
                >
            </div>
            <br>
        <?php endfor; ?>
        
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
