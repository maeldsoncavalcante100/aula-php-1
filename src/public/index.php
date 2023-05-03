<?php

//phpinfo();

//echo 'oi';

//declare(strict_types=1);

//$contador = 1;
//$mensagem = "Olá";
//$versao = array('1.1'. '2', '3.4');
//print_r($versao);
//$primeiro_nome = "Maria";
//echo $primeiro_nome;
//echo '<br />';
//$ultimo_nome = "Lourdes";
//echo $ultimo_nome;

//$time = array('Maria', 'José', 'Ana');

//echo $time[0];

//echo '<br />';
//print_r($time)

//echo 'a: [' . TRUE . ']<br />';
//echo 'a: [' . FALSE . ']<br />';
//$idade = 30;

//echo 'a: [' . (20 > 9) . ']<br />';
//echo 'b: [' . (5 == 6) . ']<br />';
//echo 'c: [' . (1 == 0) . ']<br />';
//echo 'd: [' . (1 === '1') . ']<br />';
//echo 'e: [' . '$idade'. ']<br />';
//$saldo = 10;
//if ($saldo<100) {
   /// $deposito = 1000;
   //$saldo += $deposito;
//}

//echo $saldo

//$menu = 'sobre';
//switch($menu) {
    //case 'index':
       // echo 'Escolheu a página inicial.';
      //  break;
   // case 'sobre':
       // echo 'Escolheu a página Sobre.';
        //break;
    //case 'novidades':
        //echo 'Escolheu a página Novidades.';
        //break;
    //case 'links':
        //echo 'Escolheu a página Links.';
       // break;
    //default:
    //echo 'Página não encontrada.';
    //break;
//}

//$tanque = 1;

//echo $tanque <= 1 ? 'Abastecer agora <br />' : 'Combustível OK <br />';

//$statusTanque = $tanque <= 1 ? FALSE : TRUE;

//IF($statusTanque) echo 'Combustível OK';
//else echo 'Procurar um posto para abastecer.';

/*$cout = 1;

while ($cout<=10){
    echo $cout . 'x 10 =' . $cout*10 . '<br ?>';
    ++ $cout;
};
$cout =  1;
echo '<br />';
*/

/*Arrys 03/05/23*/
/*
$vegetais = array('jerimum', 'batata', 'tomate');
$vegetais[20] = 'manga';
print_r($vegetais);

echo 'Hoje eu vou cozinhar' . $vegetais[0] . '<br />';
echo 'Hoje eu vou cozinhar' . $vegetais[1] . '<br />';
echo 'Hoje eu vou cozinhar' . $vegetais[2] . '<br />';
echo 'Vegetais disponíveis: ' . count($vegetais);

$total = count($vegetais);

for($i=0;$i<$total;$i++){
    echo 'Hoje vou cozinhar' . $vegetais[$i] . '<br />';
}*/
$vegetais = array(
    'jerimum' => 'https://cdn-icons-png.flaticon.com/512/3768/3768530.png',
    'batata' => 'https://cdn-icons-png.flaticon.com/512/135/135445.png',
    'tomate' => 'https://cdn-icons-png.flaticon.com/512/1202/1202125.png'    
);

foreach($vegetais as $chave=>$valor){
    echo 'Hoje vou cozinhar ' . $chave . 
         "<img scr=\"$valor\" /><br />";
}

?>