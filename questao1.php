<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma com Condições</title>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

h1 {
    font-size: 24px;
    margin-bottom: 10px;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
}

input {
    border: 1px solid #ccc;
    padding: 5px;
    width: 200px;
}

input[type="submit"] {
    background-color: #000;
    color: #fff;
    cursor: pointer;
    font-weight: bold;
    margin-top: 10px;
    padding: 10px 20px;
}

    
</style>
</head>
<body>
    <h1>Soma com Condições</h1>
    <form action="somaq1.php" method="post">
        <label for="num1">Primeiro Número:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Segundo Número:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <br>
        <input type="submit" value="Somar">
    </form>
</body>
</html>
