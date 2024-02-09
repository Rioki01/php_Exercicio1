<?php
    //EXERCICIOS 08/02/24.
    /**1**/
    //Substituir todas as vogais por '*'
echo "<br>1)<br>";
echo "Substituir todas as vogais por '*'<br>";
$string = "Manipulação de Strings";
echo str_replace(["a", "e", "i", "o", "u"],"*", $string);
    ////////******************************************///
    /**2**/
echo "<br>2)<br>";
echo "Verificar se um número é primo <br>";
function isPrime($number) {
    for( $i = 2; $i < $number; $i++ ){
        if($number % $i === 0)
        {
            //se for dividido por um numero, logo não é primo
            return false;
        }
    }
    // retorna verdade, se não achar divisões no for.
    return true;
}

$numero = 19;
if(isPrime($numero)){
   
    echo "$numero é um número primo";
}
else{
    echo "$numero não é  um número primo";
}

    ////////******************************************///
    /**3**/
echo "<br>3)<br>";
echo "Inverter uma string sem usar a função strrev <br>";
$string2 = "Repeticao";
$stringinvertida = "";
//somar string se utiliza ".=" e não "+=";
//strlen -1 porconta do index!
for($i = strlen($string2) - 1; $i >= 0; $i--){
    $stringinvertida .= $string2[$i];
}
echo $stringinvertida;
    ////////******************************************///
    /**4**/
echo "<br>4)<br>";
echo "Crie uma função que receba um número e retorne se é positivo, negativo ou zero.<br>";
function checknumValue($numero)
{
    if($numero > 0)
    {
        echo "O numero $numero é positivo!";
    }
    else if ($numero < 0)
    {
        echo "O numero $numero é negativo!";
    }
    else if ($numero == 0)
    {
        echo "O numero $numero é igual a zero!";
    }
}
$numeroex4 = 5;
checknumValue($numeroex4);

    ////////******************************************///
    /**5**/
    echo "<br>5)<br>";
    echo "Conte o número de palavras em uma frase e imprima cada palavra em uma nova
    linha.<br>";


$fraseexercicio5 = "esta frase possui cinco palavras";
$contadorpalavra = str_word_count($fraseexercicio5);
echo "'$fraseexercicio5' contem $contadorpalavra palavras!";
echo "<br>";
$palavraseparadas = explode(" ",$fraseexercicio5);
print_r($palavraseparadas);

    ////////******************************************///
    /**6**/
    echo "<br>6)<br>";
    echo "<br>";

?>