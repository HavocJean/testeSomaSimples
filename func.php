<?php
   receberNum($_GET['n1']);

    function receberNum($n1) {
    $total = 0;

    if($n1 > 0) {
        for($i = 1; $i < $n1; $i++) {
            if($i % 3 == 0 || $i % 5 == 0) {
                $total = $total + $i;
                // echo $i.'<br>';
            }
        }
        echo $total." Resultado Total";
    } else {
        echo "Digite um número maior que 0";
    }
    // if($n1 % 3 == 0 || $n1 % 5 == 0) {
    //     echo $n1;
    // }

        // $resultado = $n1;

        // echo $resultado;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste - Resultado</title>
</head>
<body>
    
</body>
</html>