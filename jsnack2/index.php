<?php

    // Passare come parametri GET name, mail e age e verificare (cercando i metodi
    // che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
    // che mail contenga un punto e una chiocciola e che age sia un numero.
    // Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

    $nome = $_GET['nome'];
    $mail = $_GET['mail'];
    $validate_email = filter_var($mail, FILTER_VALIDATE_EMAIL);
    $simbolo = strpos($mail, '@');
    $punto = strpos($mail, '.');
    $eta = $_GET['eta'];
    $validate_eta = filter_var($eta, FILTER_VALIDATE_INT);
    var_dump($nome,$mail,$eta);

    if (strlen($nome) > 3 && $validate_email && $simbolo && $punto && $validate_eta)  {  ?>
        <p>Accesso riuscito, benvenuto <?= $nome ?></p>
        <?php
    }  else { ?>
        <p>Accesso negato</p> <?php
    }

?>
    
    