<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio-1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
        $inf = $_REQUEST["numero"] ?? 0;
        $n = $inf - 1;
        $np = $inf + 1;
        echo "O número escolhido foi $inf<br>";
        echo "O seu antecessor é $n<br>";
        echo "O seu sucessor é $np";
        ?>
        <button onclick="javascrip:window.location.href='index.html'">&#x2B05Voltar</button>
    </main>
</body>

</html>