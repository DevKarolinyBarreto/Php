<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <form method="POST">
            <h1> Verificando um número... </h1>
            <br>
            <label for="n"> Insira um número </label>
            <input type="number" id='n' name="n" required>

            <button type="submit" name='Verificar' value="n"> </button>
</form> 

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['n']; 

    if ($n > 0) {
        echo "Valor positivo";
    }    

    elseif ($n < 0) {
        echo "Valor negativo";
    }

    else {
        echo "Valor igual a 0";
    }
}

?>

</body>
</html>