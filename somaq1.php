<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$soma = $num1 + $num2;
if ($soma > 20) {
    $resultado = $soma + 8;
    $mensagem = "Soma + 8: ";
} else {
    $resultado = $soma - 5;
    $mensagem = "Soma - 5: ";
}
echo "<h1>Resultado</h1>";
echo "<p>$mensagem $resultado</p>";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    
    <style>
    h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

p {
    font-size: 18px;
    margin-bottom: 10px;
}

.resultado-positivo {
    color: green;
}

.resultado-negativo {
    color: red;
}
</style>

</head>
<body>
    <h1>Resultado</h1>
    <p><?php echo $mensagem . " " . $resultado; ?></p>
</body>
</html>