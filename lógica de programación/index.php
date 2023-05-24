<?php 
class Logica{

    /** 
     * sacar la suma de los mmultiplos de un número 
     * 
     * @param $num - Número al que se le tomara los multiplos
     * @return - la suma de los multiplos de un numero dado
     **/
    public function sacarMultiplos(int $num){ 
        return array_sum(
            array_filter((range(1,$num -1)), function($i){
                return($i % 3 == 0 || $i % 5 == 0);
            }));
    }
}
$Logica = new Logica();
$num = 50;
echo($Logica->sacarMultiplos($num));
?>