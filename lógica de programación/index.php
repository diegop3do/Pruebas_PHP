<?php 

/* punto 1. Dado un número n encontrar todos los múltiplos de 3 y 5 menores al número dado, el
 método debe retornar la suma de los múltiplos encontrados. Ejemplo: si el número
 ingresado es 10, los múltiplos de 3 y 5 menores a 10 son: 3, 5, 6, 9, el resultado de la
 función debe ser 23, debido a que es la suma de 3, 5, 6, 9.*/
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
$num = 20;
echo($Logica->sacarMultiplos($num));

///////////////////////////////////////////////////////////

/*punto 2. Dada una frase, devolver la frase donde las palabras con mayor a 5 letras estén al
revés. Ejemplo: Dado “Bienvenido a Treda Solutions” retornar “odinevneiB a Treda
snoituloS” */

    function invertirFrase($frase){
        $palabras = explode(" ", $frase);

        foreach($palabras as $indice => $palabra){
            if(strlen($palabra) > 5){
            $palabras[$indice] = strrev($palabra);
            }
        }
        return $fraseInvertida = implode(" ", $palabras);
}

$frase = "Bienvenido a Treda Solutions";
$fraseInvertida = invertirFrase($frase);
echo("<br>$fraseInvertida");
?>