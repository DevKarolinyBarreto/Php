<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercicio 3 </title>
</head>

<body>
    <form method="POST">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">

        <label for="nota1">Nota 1</label>
        <input type="text" id="nota1" name="nota1">

        <label for="nota2">Nota 2</label>
        <input type="text" id="nota2" name="nota2">

        <label for="nota3">Nota 3</label>
        <input type="text" id="nota3" name="nota3">

        <button type="submit" name="calcular">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $nota1 = floatval($_POST["nota1"]);
        $nota2 = floatval($_POST["nota2"]);
        $nota3 = floatval($_POST["nota3"]);

        function media($n1, $n2, $n3)
        {
            return ($n1 + $n2 + $n3) / 3;
        }
        $media_t = media($nota1, $nota2, $nota3);

        $media_final = match (true) {
            $media_t >= 7 => "aprovado",
            $media_t >= 5 && $media_t <= 6.9 => "em recuperação",
            $media_t < 5 => "reprovado",
            default => "valor inválido",
        };

        echo "$nome, você está $media_final com média final $media_t";
    }
    ?>

</body>

</html>