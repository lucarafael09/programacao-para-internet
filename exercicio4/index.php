<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
    <h1>Tabuada</h1>
    
    <form action="processar.php" method="POST">
        <div>
            <label for="numero">Número inteiro:</label>
            <input type="number" id="numero" name="numero" step="1" required>
        </div>
        <br>
        
        <button type="submit">Gerar Tabuada</button>
    </form>
</body>
</html>
