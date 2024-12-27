<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>operadores aritmeticos</title>
    </head>

    <body>
        <?php
            $n1=$_GET["a"];
            $n2=$_GET["b"];
            $soma=$n1+$n2;
            $media=($n1+$n2)/2;
            echo "<h2>VALORES RECEBIDOS: $n1 e $n2</h2>"; 
            echo "<br>";  
            echo "a soma eh: $soma";
            echo "<br/>a subtracao eh: ".($n1-$n2);
            echo "<br/>a multiplicacao eh: ".($n1*$n2);
            echo "<br/>a divisao eh: ".($n1/$n2);
            echo "<br/>o modulo eh: ".($n1%$n2);
            echo "<br/>a media eh: $media"
        ?>
    </body>
</html>