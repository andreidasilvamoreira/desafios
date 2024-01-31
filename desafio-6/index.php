<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio-6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $n1 = $_REQUEST['ip1'];
    $salarioMinimo = 1380.00;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="">Salário (R$)</label>
            <input type="number" id="ip1" name="ip1">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
        <section>
            <h2>Resultado Final</h2>
            <?php
            $result = (int)($n1 / $salarioMinimo);
            $resto = $n1 % $salarioMinimo;
            echo "Quem recebe um salário de $n1 ganha <strong>$result salários minimos</strong> + $resto."
            ?>
        </section>
    </main>
</body>

</html>