<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>IMC</title>
</head>
<body>
    <h1>Cálculo de IMC</h1>
    
    <form action="processar.php" method="POST">
        <div>
            <label for="peso">Peso (kg):</label>
            <input type="number" id="peso" name="peso" step="0.01" min="0.01" required>
        </div>
        <br>
        
        <div>
            <label for="altura">Altura (m):</label>
            <input type="number" id="altura" name="altura" step="0.01" min="0.01" required>
        </div>
        <br>
        
        <button type="submit">Calcular IMC</button>
    </form>
</body>
</html>
