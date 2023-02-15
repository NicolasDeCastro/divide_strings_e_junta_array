<?php
$gmail ='nicolas.machado@gmail.com';

$string=',,,....niconicoco....,,,';

$array=['1234','5678','9101112'];
//explode divide o string , primeiro vc escolhe o local de divisão, que no caso é o """.""", toda a vez que tiver """".""" na string ele divide ela
list($nome,$sobrenome)=explode('.',$gmail);
var_dump(explode('.',$gmail));
echo $nome;



// implode ele junta um array, neste caso transformando em string os mesmos parametros do anterior são usados, porem com uma alteração, vc escolhe como irá separa-los

$TESTE =implode(',',$array);
echo $TESTE.PHP_EOL;

//o trim "apara as pontas " do array, removendo itens não desejados,SOMENTE AS BEIRADAS
echo trim($string,",.").PHP_EOL;


//rtrim vc remove a beirada da direita

echo rtrim($string,",.").PHP_EOL;

//com ltrim vc remove as da esquerda

echo ltrim($string,".,").PHP_EOL;