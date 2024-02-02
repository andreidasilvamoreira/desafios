<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio-9</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $atual = date("Y");
    $ano = $_REQUEST["idade"] ?? $atual;
    $nasc = $_REQUEST["nasceu"] ?? 2000;
    ?>
    <main>

        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">Em que ano voce nasceu?</label>
            <input type="number" name="nasceu" id="nasceu" min="1900" value="<?= $nasc ?>">
            <label for="">Quer saber sua idade em que ano?(atualmente estamos em <strong>2024</strong>)</label>
            <input type="number" name="idade" id="idade" min="1900" value="<?= $ano ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
        $idade = $ano - $nasc;

        echo "Quem nasceu em $nasc vai ter <strong> $idade anos </strong em $ano"
        ?>
    </section>
</body>

</html>