<?php
echo "meu primeiro programa em PHP!\n" ;

$nome = "Lindemberg Rodrigues";
$idade = 17;

if ($idade >= 18){
	echo "meu nome é $nome e tenho $idade anos";	
}else{
	echo "idade não correspondente!";
}

echo "\n";

for ($i =0 ; $i <= 9; $i++){
	for ($j = 0 ; $j <=  9 ;  $j++){
		echo "$i * $j = ", $i*$j,"\n";
	}
	echo "\n";
}
