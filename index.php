<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>

<?php 

require_once('User.php');

    // UTENTE 1
    // SET NICKNAME PUBBLICO
    $utente1 = new Privilegies('LionRavert');

    // SET INFORMAZIONI SENSIBILI PRIVATE TRAMITE METODO
    $utente1->setUser('Roberto', 'Attanasio', 24);

    var_dump($utente1);

    // UTENTE 2
    // SET NICKNAME PUBBLICO
    $utente2 = new Privilegies('Roses22');

    // SET INFORMAZIONI SENSIBILI PRIVATE TRAMITE METODO
    $utente2->setUser('Federica', 'Manograssi', 22);

    var_dump($utente2);

    // UTENTE 3
    // SET NICKNAME PUBBLICO
    $utente3 = new Privilegies('Presidente_28');

    // SET INFORMAZIONI SENSIBILI PRIVATE TRAMITE METODO
    $utente3->setUser('Paolo', 'Dossetto', 28);

    var_dump($utente3);

?>
    
</body>
</html>