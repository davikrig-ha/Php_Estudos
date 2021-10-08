<?php 

function linha($semana)
{
   $linha = '<tr>';

  for($i = 0; $i <= 6; $i++){
     
   if(array_key_exists($i, $semana)){
        $linha .= "<td>{$semana[$i]}</td>";
     } 
   
     else {
       $linha .= "<td></td>";
     }

   }

   $linha .= '<tr>';

   return $linha;
}

function calendario()
{
   $calendario = '';

   $diaHoje = date('j');
 
   
   $dia = 1;
   
   $semana = [];
   
   while ($dia <= 31) {
       
       if($dia == $diaHoje){
           array_push($semana, "<b>$diaHoje</b>");
       }
       else{
        array_push($semana, $dia);
       }
    
      

      if (count($semana) == 7){
         $calendario .= linha($semana);
         $semana = [];
      }
    
 

      $dia++;
   }
   

   $calendario .= linha($semana);

   return $calendario;
}

?>




<table border="1">
   <tr>
      <th>Dom</th>
      <th>Seg</th>
      <th>Ter</th>
      <th>Qua</th>
      <th>Qui</th>
      <th>Sex</th>
      <th>Sab</th>
   </tr>
   
   <?php echo calendario(); ?>
   

</table>