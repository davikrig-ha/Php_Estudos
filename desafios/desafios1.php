<?php 

$data = date('H');

echo "São: ".$data." Horas ";

if($data > 6 && $data <= 12){
    echo ", Bom Dia!";
}
elseif($data > 12 && $data <= 18){
    echo ", Boa Tarde!";
}
else{
    echo ", Boa Noite";
}

?>



