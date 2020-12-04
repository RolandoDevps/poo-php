<?php

    require 'Personnage.php';
    require 'Form.php';

    $martial = new Personnage("Martial");

    $roland = new Personnage("Roland");

    var_dump($roland->getNom());

    $martial->attaque($roland);
    $roland->mort();

    var_dump($martial);
    var_dump($roland);
    

    $form = new Form(array(
        'username' => 'RoDev', 
    ));

    var_dump($form);

    echo $form->input('text','username');
    echo $form->input('password','password');
    echo $form->submit();

