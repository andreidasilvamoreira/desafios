<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio-3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <h1>Conversor de Moedas</h1>
        <?php

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        $cotação = $dados["value"][0]["cotacaoCompra"];
        $real = $_REQUEST["dinheiro"];
        $dolar = $real / $cotação;
        echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$ " . number_format($dolar, 2, ",", ".");

        ?>
        <button onclick="javascrip:window.location.href='index.html'">&#x2B05Voltar</button>
    </section>
</body>

</html>