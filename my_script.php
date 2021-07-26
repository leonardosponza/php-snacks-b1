<!-- Creiamo un array contenente le partite di basket di un’ipotetica 
tappa del calendario. Ogni array avrà una squadra di 
casa e una squadra ospite, punti fatti dalla squadra di 
casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->
<!-- Olimpia Milano - Cantù | 55-60 -->

 <?php
$array = [
   'team_casa'=> 'Milano',
   'team_visitatore'=>'Cantù',
   'punti_casa'=>'55',
   'punti_visitatore'=>'60'
]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span>partita:<?php echo $array['team_casa']?> </span>
    <span><?php echo $array['team_visitatore']?></span>
    <span>punti:<?php echo $array['punti_casa']?> </span>
    <span><?php echo $array['punti_visitatore']?></span>
</body>
</html> 

