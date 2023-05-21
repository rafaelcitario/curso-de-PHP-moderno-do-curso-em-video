<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    // O PHP retorna para o cliente o horaio do servidor e não do meu computador.
    // Então caso trabalhemos com data e hora devemos sempre definir a timezone

    // date_default_timezone_set() precisa sempre estar acima de data e hora para ser definida.
    date_default_timezone_set("America/Sao_paulo");
    $date = date("d/m/y");
    $time = date("G:i:s");

    echo " Hora atual: $date. Horario atual: $time."
    ?>


</body>

</html>