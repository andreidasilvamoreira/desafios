<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio-4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php
        $post = $_REQUEST["Real"];

        echo "Analisando o número <strong>" . number_format($post, 2, ",", ".") . "</strong> informado pelo usuário:";

        $int = (int) $post;
        $fra = $post - $int;

        echo "<ul><li>A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . "</strong></li>";
        echo "<li>A parte fracionária do número é <strong>" . number_format($fra, 2, ",", ".") . "</strong></li></ul>";

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>