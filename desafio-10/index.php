<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio-10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $preço = $_REQUEST['preco'] ?? '0';
        $reajuste = $_REQUEST['porc'] ?? '0';
        ?>
        <h1>Reajustador de Preço</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="">Preço do Produto(R$)</label>
            <input type="number" name="preco" id="preco" step="0,01" value="<?= $preço ?>">
            <label for="porc">Qual será o percentual de reajuste? (<strong><span id="p">0</span>%</strong>)</label>
            <input type="range" name="porc" id="porc" min="0" max="100" step="1" oninput="mudaValor()"
                value="<?= $reajuste ?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
        $result = ($preço * $reajuste) / 100;
        $novo = $preço + $result;
        echo "O produto que custava R$" . number_format($preço, 2, ",", ".") . ", com <strong>$reajuste % de aumento</strong> vai passar a custar <strong>R$" . number_format($novo, 2, ",", ".") . "</strong> a partir de agora.";
        ?>
    </section>
    <script>
    function mudaValor() {
        p.innerText = porc.value
    }
    </script>
</body>

</html>