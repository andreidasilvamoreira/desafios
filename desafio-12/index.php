<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio-12</title>
    <link rel="stylesheet" href="style.css">
    <style>
    img.nota {

        height: 50px;
    }
    </style>
</head>

<body>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">Qual o valor voce deseja sacar?(R$)<sup>*</sup></label>
            <input type="number" name="valor" id="" min="0" value=" <?= $total ?>" step="5">
            <p style="font-size: 0.6em"><sup>*</sup>notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php
    $total = $_REQUEST['valor'] ?? 0;
    $resto = $total;

    $tot100 = floor($resto / 100);
    $resto %= 100;

    $tot50 = floor($resto % 50);
    $resto %= 50;

    $tot10 = floor($resto % 10);
    $resto %= 10;

    $tot5 = floor($resto % 5);
    $resto %= 5;

    ?>
    <section>
        <h2>Saque de R$<?= number_format($total, 2, ",", ".") ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="img/100-reais.jpg" alt="" srcset="" class="nota">x<?= $tot100 ?></li>
            <li><img src="img/50-reais.jpg" alt="" srcset="" class="nota">x<?= $tot50 ?></li>
            <li><img src="img/10-reais.jpg" alt="" srcset="" class="nota">x<?= $tot10 ?></li>
            <li><img src="img/5-reais.jpg" alt="" srcset="" class="nota">x<?= $tot5 ?></li>
        </ul>
    </section>
</body>

</html>