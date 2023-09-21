
<?php
//METODO IF CONDICIONAL
$num=30;
if ($num >= 18) {
    echo '<h1>Es mayor de edad</h1>';
} else {
    echo '<h1>Es menor de edad</h1>';
}
echo '<hr>';
//METODO SWITCH
$num1=78;
switch ($num1) {
    case 18:
        echo 'Tienes 18 años <br>';
        break;
    case $num1<18:
        echo 'Eres menor a 18 años <br>';
        break;
    case $num1>18:
        echo 'Eres mayor a 18 años <br>';
        break;
    default:
        echo $num1 .' no es valido <br>';
        break;
}
echo '<hr>';
//BUCLE FOR
$colores = ['rojo','azul','verde','amarillo'];
$length = count($colores);//Obtenemos la longitud de una variable y se la 
//asignamos a otra
for($i=0; $i<$length; $i++){
    echo 'Color : '. $colores[$i].'<br>';
}
echo '<hr>';
//BUCLE FOREACH
$frutas = ['manzana','uva','sandia','melon'];
foreach($frutas as $fruta){
    echo 'Fruta : '.$fruta.'<br>';
}
echo '<hr>';
//METODO WHILE
$paises = ['mexico','china','argentina'];
$lenght = count($paises);
$i=0;
while ($i<$lenght) {
    echo 'Pais : '.$paises[$i].'<br>';
    $i++;
}
echo '<hr>';
//Metodo DO WHILE
$edad=15;
do{
   echo $edad.'<br>';
   $edad++;
}while ($edad<18);
echo '<hr>';
//GOTO
//Sirve para saltar lineas de codigo hasta domnde le digamos
//a  uestra instruccion, ejemplpo

goto aqui;

echo '<h3>Instruccion 1</h3>';
echo '<h3>Instruccion 2</h3>';
echo '<h3>Instruccion 3</h3>';
echo '<h3>Instruccion 4</h3>';

aqui:
    echo '<h1>Me he saltado las instrucciones</h1>';
echo '<hr>';

//Esta funcion nos pemrite saber si nuestra variable tiene algun valor o no
isset($paises);
if (isset($paises)){
    echo 'Si existe';
} else {
    echo 'no existe';
}
//Si no usamos esta funcion y la variable no existe nos aparecera un error
//en la web, y si usamo la funcion y la variable no existe, solo nos avisara
echo '<hr>';

//Para recibir un valor entero podemos usar la funcion (int)
if(isset($_GET['edad'])){
    $entero = (int)$_GET['edad'];
    //Aqui nos esta dando un valor entero
}else{
    $entero = $_GET['edad'];
    //Aqui nos retorna una string
}
var_dump($entero);
echo '<hr>';