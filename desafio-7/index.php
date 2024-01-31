<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio-7</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="$_GET">
            <label for="">Número</label>
            <input type="number" id="n1" name="n1">
            <input type="submit" value="Calcular Raíz">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
        $number1 = $_REQUEST["n1"];
        echo "Analisando o <strong>número $number1 </strong>, temos:";
        $raizQ = sqrt($number1);
        $raizC = pow($number1, 1 / 3);

        echo "<ul><li>A sua raiz quadrada é <strong>" . number_format($raizQ, 2, ",", ".") . "</strong></li>" .
            "<li>A sua raiz cubica é <strong>" . number_format($raizC, 2, ",", ".") . "</strong></li></ul>";
        ?>
    </section>
</body>

</html>