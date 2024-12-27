<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>funcoes aritmeticas</title>
    </head>

    <body>
        <?php
            $v1=$_GET["x"];
            $v2=$_GET["y"];
            echo "<h2>Valores Recebidos: $v1 e $v2</h2>";
            echo "o valor absoluto de $v2 eh ".abs($v2);
            echo "</br>o valor de $v1<sup>$v2</sup> eh ".pow($v1, $v2);
            echo "</br>a raiz de $v1 eh ".sqrt($v1);
            echo "</br>o valor arredondado de $v2 eh ".round($v2);
            echo "</br>a parte inteira de $v2 eh ".intval($v2);
            echo "</br>o valor de $v2 em moeda eh R$".number_format($v2,2, ",", ".");
        ?>
    </body>
</html>