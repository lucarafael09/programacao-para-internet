<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <title>Desconto na compra</title>
</head>
<body>
    <h1>Desconto na compra</h1>
    
    <form action="processar.php" method="POST">
        <div>
            <label for="valor">Valor total da compra (R$):</label>
            <input 
                type="number" 
                id="valor" 
                name="valor" 
                step="0.01" 
                min="0" 
                required
            >
        </div>
        <br>
        
        <div>
            <label for="codigo">Código do cliente:</label>
            <select id="codigo" name="codigo" required>
                <option value="1">1 - Cliente Comum (5% de desconto)</option>
                <option value="2">2 - VIP (10% de desconto)</option>
                <option value="3">3 - Funcionário (15% de desconto)</option>
            </select>
        </div>
        <br>

        
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
