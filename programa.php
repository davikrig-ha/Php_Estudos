<?php 

$data = date('N') - 6;

echo "hoje é dia " . date('d/M/y');
echo " agora são " . date('h:i:s');
echo " dia da semana " . date('N');
echo " faltam " . $data . " dias Para o sábado";


?>