<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Faturamento semanal</title>
</head>
<body>
    <h1>Faturamento semanal</h1>
    <p>Digite as vendas de cada dia.</p>
    
    <form action="processar.php" method="POST">
        <?php
        $dias = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
        for ($i = 0; $i < 7; $i++):
        ?>
            <div>
                <label for="venda_<?= $i ?>"><?= $dias[$i] ?> (R$):</label>
                <input 
                    type="number" 
                    id="venda_<?= $i ?>" 
                    name="vendas[]" 
                    step="0.01" 
                    min="0" 
                    required
                >
            </div>
            <br>
        <?php endfor; ?>
        
        <button type="submit">Analisar</button>
    </form>
</body>
</html>
