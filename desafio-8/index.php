<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio-8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="$_GET">
            <label for="">1º Valor</label>
            <input type="number" name="num1" id="num1" required value="<? $r1 ?>">
            <label for="">1º Valor</label>
            <input type="number" name="num2" id="num2" required value="<? $p1 ?>">
            <label for="">2º Peso</label>
            <input type="number" name="num3" id="num3" min="1" required value="<? $r2 ?>">
            <label for="">2º Peso</label>
            <input type="number" name="num4" id="num4" min="1" required value="<? $p2 ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo de Médias</h2>
        <?php
        $r1 = $_REQUEST['num1'] ?? '';
        $p1 = $_REQUEST['num2'] ?? '';
        $r2 = $_REQUEST['num3'] ?? '';
        $p2 = $_REQUEST['num4'] ?? '';
        $ma = ($r1 + $r2) / 2;
        $mp = ($r1 * $p1 + $r2 * $p2) / ($p1 + $p2);
        echo "Analisando os valores $r1 e $r2: ";
        echo "<ul><li>A <strong> Média Aritmética Simples</strong> entre os valores é igual a " . number_format($ma, 2, ",", ".") . ".</li>" . "<li>A <strong> Média Aritmética Ponderada </strong> com pesos $p1 e $p2 é igual a " . number_format($mp, 2, ",", ".") . ".</li></ul>";
        ?>
    </section>
</body>

</html>