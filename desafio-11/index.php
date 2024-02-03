<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio-11</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    $total = $_REQUEST["tempo"] ?? 0;
    $resto = $total;

    $semana = (int)($resto / 604_800);
    $resto = $resto % 604_500;

    $dia = (int)($resto / 84_400);
    $resto = $resto % 84_400;

    $hora = (int)($resto / 3_600);
    $resto = $resto % 3_600;

    $min = (int)($resto / 60);
    $resto = $resto % 60;

    $segundos = $resto;

    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">Qual é o total de segundos?</label>
            <input type="number" name="tempo" id="tempo" min="0" step="1" value="<?= $total ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

</body>
<section>
    <h2>Totalizando Tudo</h2>
    <p>Analisando o valor que voce digitou, <strong><?= $total ?> segundos</strong> equivalem a um total de:
    <p>
    <ul>
        <li><?= $semana ?> semanas</li>
        <li><?= $dia ?> dias</li>
        <li><?= $hora ?> horas</li>
        <li><?= $min ?> minutos</li>
        <li><?= $segundos ?> segundos</li>
    </ul>
</section>

</html>