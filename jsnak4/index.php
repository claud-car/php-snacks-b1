<?php
    // Creare un array di array.
    // Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
    // (ad es 31/01/2007) e come valore un array di post associati a quella data.
    // Stampare ogni data con i relativi post.
    $post= [
        '10/10/2010' => [
            [
            'title' => 'titolo',
            'autore' => 'author',
            'text' => 'testo2010'
            ]
        ],
        '10/10/2011' => [
            [
            'title' => 'titolo',
            'autore' => 'author',
            'text' => 'testo2011'
            ]
        ],
        '10/10/2012' => [

            [
            'title' => 'titolo',
            'autore' => 'author',
            'text' => 'testo2012'
            ]
        ]

    ];

?>

<p>

</p>

<?php
    $post_keys= array_keys($post);

    var_dump($post);
    

    for ($i=0; $i < count($post_keys); $i++) {
        // echo $post_keys[$i];
        // var_dump($post[$post_keys[$i]]);
        $posts_by_key = $post[$post_keys[$i]];
        // var_dump($posts_bykey);

        for ($j=0; $j < count($posts_by_key); $j++) { 

            $prova = $posts_bykey[$j];

            //var_dump($posts_bykey[$j]);
            echo  $posts['title'] . "<br>";
        }
    }  
?>


