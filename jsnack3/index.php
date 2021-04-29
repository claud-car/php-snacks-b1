<?php
    // Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
    // avrà Nome, Cognome e un array contenente i suoi voti scolastici.
    // Stampare Nome, Cognome e la media dei voti di ogni alunno.

    $alunni = [
        [
            "nome" => "Claudio",
            "cognome" => "Claudietti",
            "voti" => [6,7,8,5,6]
        ],
        [
            "nome" => "Antonello",
            "cognome" => "Studini",
            "voti" => [5,4,6,3,8]
        ],
    ];

    var_dump($alunni);

    for($i = 0; $i < count($alunni); $i++) {
        $media = array_sum($alunni[$i]["voti"]) / count($alunni[$i]["voti"]);
        ?>
        <div>
        <p> <?= "Nome: " . $alunni[$i]["nome"];?></p>
        <p> <?= "Cognome: " . $alunni[$i]["cognome"];?></p>
        <p><?= "Media voti: " . $media ?></p>
        </div>

        <?php 
    }
?>