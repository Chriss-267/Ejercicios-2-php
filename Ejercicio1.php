<?php



function birthdayCakeCandles($candles) {

    $maxHeight = max($candles);
    // inicializando contador
    $count = 0;
   
    // recorriendo cada una de las candle, en el arreglo de candles proporcionado
    foreach ($candles as $candle) {
        // si la candle actual es del mismo tamanio que la mas alta:
        if ($candle == $maxHeight) {
            // se aumenta el contador
            $count++;
            }
        }
    
    return $count;
}


$array = [1, 2, 3, 3];
echo birthdayCakeCandles($array);

 

?>