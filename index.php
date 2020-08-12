<?php
/* echo 'ohayo sekay ';
$nome  = 'Denarci';
$idade = 20;
$peso = 89.90;
$humano = true;
echo '\n Minha idade é $idade';
echo " Minha idade é $idade";
echo $peso + $idade;
$grupo = ['nome' => "Gabriel ",
          'nome1' => "Sandro",
          'nome2' => "Xande",
          'Grupo A' => 'a',
          'b' => 1,
          'c' => 1.6,
          'd' => false];
//var_dump($grupo);
echo $grupo["nome"];

$x = 10;
$y = 3;
$res = $x % $y;
print $res;
*/
//IoTTecnologia@2019!
/*
$x = 10;
$y = 3;

if($y % 2 == 0){
    echo 'par';
}else{
    echo 'impar';
}

//while
$i = 0;
while($i < 10){
    echo $i;
    $i++;
}

//do ... while
echo "\n";
do{
    echo $i;
} while($i<10);

//for
for($i = 0;$i < 10; $i++){
    echo $i;
}
echo "\n";
//foreach
$j = [1,2,3,4,5,6,10];
foreach ($j as $k){
    echo $k;
}*/
//define a pagina atual pela URL
$pagina = 'homke';
if (isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}
//Carrega pagina header
include 'header.php';

//carrega pagina escolhida
switch ($pagina){
    case 'equipe':
        include 'equipe.php';
        break;
    default:
        include 'home.php';
        break;
}
//carrega footer
include 'footer.php';