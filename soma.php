<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números</title>
</head>
<body>
    <h1>Somar Dois Números</h1>
    
    <!-- Formulário HTML para enviar os números -->
    <form method="POST" action="">
        Número 1: <input type="number" name="num1" required><br><br>
        Número 2: <input type="number" name="num2" required><br><br>
        <input type="submit" value="Somar">
    </form>

    <?php
    // Verifica se os números foram enviados pelo formulário
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe os valores dos números enviados via POST
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Realiza a soma dos dois números
        $resultado = $num1 + $num2;

        // Exibe o resultado
        echo "<h2>Resultado da Soma: $resultado</h2>";
    }
    ?>
</body>
</html>
