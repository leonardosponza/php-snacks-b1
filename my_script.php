<!-- Creiamo un array contenente le partite di basket di un’ipotetica 
tappa del calendario. Ogni array avrà una squadra di 
casa e una squadra ospite, punti fatti dalla squadra di 
casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->
<!-- Olimpia Milano - Cantù | 55-60 -->

<?php
$array = [
   'squad1' => 'Olimpia Milano - Cantù | 55-60',
   'squad2' => 'macerata - livorno | 48-39',
   'squad3' => 'napoli - firenze | 34-55'
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
    <p>partita:<?php echo $array['squad1']?></p>
    <p>partita:<?php echo $array['squad2']?></p>
    <p>partita:<?php echo $array['squad3']?></p>
</body>
</html>

<!-- Snack 2 -->
<!-- Passare come parametri GET name, mail e age
 e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
 che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
 altrimenti “Accesso negato” -->