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
/*********6**********/
echo "<br>6)";
echo "<br>Crie uma Função que verifica se a palavra é palindromo.";
echo "<br>";
function palindromo($frase){
if (strrev($frase) == $frase){
echo "A frase é um palindromo!";
}
else{
echo "A frase não é um palindromo!";
}
}
$frasepalindromoex6 = "abba";
palindromo($frasepalindromoex6);
/*********7**********/
echo "<br>7)";
echo "<br>Crie um programa que imprima numeros de 1 a 20, substituindo 
multiplos de 3 por 'fizz' e de 5 por 'buzz'.";
echo "<br>";
function ex7(){
for($i = 1; $i <= 20; $i++)
{
if($i % 3 == 0)
{
echo "fizz,";
}else if ($i % 5 == 0)
{
echo "buzz,";
}
else
{
echo "$i,";
}
}
}
ex7();
/*********8**********/
echo "<br>8)";
echo "<br>Crie uma função que remova espaços em branco de uma string";
echo "<br>";
function ex8($ex8frases){
echo str_replace(" ", "", $ex8frases);
}

$ex8frase = "frase com varios espaços!!";
ex8($ex8frase);
/*********9**********/
echo "<br>9)";
echo "<br>Crie um programa que imprima os numeros fibbonaci até o decimo 
termo.";
echo "<br>";
function ex9fibbonaci()
{
$numero = 0;
$num1 = 0;
$num2 = 1;
echo $num1.' '.$num2.' ';
while($numero < 10)
{
$num3 = $num1 + $num2;
echo $num3.' ';
$num1 = $num2;
$num2 = $num3;
$numero = $numero + 1;
}
} 
ex9fibbonaci();
/*********10**********/
echo "<br>";
echo "<br>10)";
echo "<br>Crie uma funcao que receba um texto e retorna se é um 
pangrama(contem todas letras do alfabeto).";
function ex10($ex10){
$frase = strtolower(trim($ex10));
$letras = str_split("thequickbrownfoxjumpsoverthelazydog");
foreach($letras as $letra){
if(!strstr($frase, $letra))
{
return 0;
}
}
return 1;
}
$fraseex10 = "the quick brown fox jumps over the lazy dog";

if(ex10($fraseex10)){
echo "<br> É um pangrama!";
}else{
echo "<br>NÃO é um pangrama!";
}
?>