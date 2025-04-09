<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercicio 4 </title>
</head> 

<body>
    <form method="POST">
        <h1> Notas por média </h1>

        <label for="nota1"> Nota 1 </label>
        <input type="text" id="nota1" name="nota1">

        <label for="nota2"> Nota 2 </label>
        <input type="text" id="nota2" name="nota2">

        <label for="nota3"> Nota 3 </label>
        <input type="text" id="nota3" name="nota3">

        <button type="submit" name="calcular"> Calcular média </button>
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $notas = [$_POST["nota1"], $_POST["nota2"], $_POST["nota3"]];

        $soma = array_reduce($notas, fn($acc, $n) => $n + $acc, 0);
        $media = $soma / 3;

        if ($media >= 6) {
            echo "<br> Aprovado com nota: $media";
        } else {
            echo "<br> Reprovado com nota: $media";
        }
    }

    ?>
</body>

</html>