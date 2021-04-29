<?php
$prima_tappa = [
    [
        'squadra_casa' => 'Milano',
        'punteggio_casa' => '3',
        'squadra_ospite' => 'Napoli',
        'punteggio_ospite' => '3'
    ],
    [
        'squadra_casa' => 'Roma',
        'punteggio_casa' => '4',
        'squadra_ospite' => 'Fiorentina',
        'punteggio_ospite' => '1'
    ],
    [
        'squadra_casa' => 'Torino',
        'punteggio_casa' => '1',
        'squadra_ospite' => 'Juva',
        'punteggio_ospite' => '0'
    ]
];

// var_dump($prima_tappa);
for($i = 0;$i < count($prima_tappa); $i++) { ?> 
    <div>
        <p><?= $prima_tappa[$i]['squadra_casa'] ?> - <?= $prima_tappa[$i]['squadra_ospite'] ?> | <?= $prima_tappa[$i]['punteggio_casa'] ?> - <?= $prima_tappa[$i]['punteggio_ospite'] ?></p>
       
        <!-- <span><?= $prima_tappa[$i]['squadra_casa'] ?> -</span>
        <span><?= $prima_tappa[$i]['squadra_ospite'] ?> |</span>
        <span><?= $prima_tappa[$i]['punteggio_casa'] ?> -</span>
        <span><?= $prima_tappa[$i]['punteggio_ospite'] ?></span>
        <br> -->
        
        
        
    </div>

    <?php
}
?>
