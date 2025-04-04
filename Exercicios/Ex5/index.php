<!DOCTYPE html>
<html>
<head>
    <title>Exemplo 5</title>
</head>
<body>
    <h2>Exemplo 5</h2>
    <form action="calcular.php" method="post">
        <label for="palavra">Digite uma palavra:</label><br>
        <input type="text" id="palavra" name="palavra" required><br><br>

        <label for="quantidade">Quantas vezes deseja repetir?</label><br>
        <input type="number" id="quantidade" name="quantidade" min="1" required><br><br>

        <input type="submit" value="Mostrar Resultados">
    </form>
</body>
</html>