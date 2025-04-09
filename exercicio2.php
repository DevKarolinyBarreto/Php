<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercicio 2 </title>
</head>
<body>
    <form method="POST">
    <h1> Imprimindo valores... </h1>
    <br>
            <label for="a"> Insira o número A: </label>
            <input type="number" id='a' name="a" required>

            <br>

            <label for="b"> Insira o número B: </label>
            <input type="number" id='b' name="b" required>

            <button type="submit" name='Resultado...' value=""> Ordenar </button>
</form> 

<?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];

     if ($a < $b) {
        echo "$a <br>";
        echo $b;
     }  
     else {
        echo "$b <br>";
        echo $a;
     }
     }
?>

</body>
</html>