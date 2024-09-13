<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
        $escolhido = $_GET['numero'];

        // $antecessor = $escolhido - 1;
        // Essas duas váriaveis vão gastar mais memória
        // $sucessor = $escolhido + 1;

        echo "<p>O número escolhido foi <strong>$escolhido</strong></p>";

        echo "<p>O seu antecessor é " . $escolhido - 1 . "</p>";

        echo "<p>O seu sucessor é " . $escolhido + 1 . "</p>";
        ?>

        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>

        <!-- <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button> -->
    </main>
</body>

</html>