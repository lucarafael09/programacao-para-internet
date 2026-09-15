<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tipo de triângulo</title>
</head>
<body>
    <h1>Tipo de triângulo</h1>
    
    <form action="processar.php" method="POST">
        <div>
            <label for="lado_a">Lado A:</label>
            <input type="number" id="lado_a" name="lado_a" step="0.01" min="0.01" required>
        </div>
        <br>
        
        <div>
            <label for="lado_b">Lado B:</label>
            <input type="number" id="lado_b" name="lado_b" step="0.01" min="0.01" required>
        </div>
        <br>
        
        <div>
            <label for="lado_c">Lado C:</label>
            <input type="number" id="lado_c" name="lado_c" step="0.01" min="0.01" required>
        </div>
        <br>
        
        <button type="submit">Classificar</button>
    </form>
</body>
</html>
