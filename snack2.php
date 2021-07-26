<?php
    if(empty($_GET['mail'])){
        $stringa = 'errore';
    } else {
        $mail = $_GET['mail'];
    }

    if(strpos($mail, '@') !== false & strpos($mail, '.') !== false){
        $stringa = 'accesso riuscito';
    } else{
        $stringa = 'accesso negato';
    }
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
    
</body>
</html>