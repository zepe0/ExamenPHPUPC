<?php

session_start();
$_SESSION["fridens"] = array(
    array(
        'nom' => 'Toni',
        'cognom' => 'Oller',
        'img' => 'toni.jpeg'
    ),
    array(
        'nom' => 'Ikram',
        'cognom' => 'Bghiel',
        'img' => 'ikram.jpeg'
    ),
    array(
        'nom' => 'Neus',
        'cognom' => 'Vidal',
        'img' => 'neus.jpeg'
    ),
    array(
        'nom' => 'Juan',
        'cognom' => 'Vidal',
        'img' => 'juan.jpeg'
    ),

    array(
        'nom' => 'PePito',
        'cognom' => 'Grillo',
        'img' => 'pepito.jpg'
    ),
    array(
        'nom' => 'Pinocho',
        'cognom' => 'nas llarg',
        'img' => 'pinocho.png'
    ),
    array(
        'nom' => 'Gepeto',
        'cognom' => 'Perez',
        'img' => 'gepeto.png'
    ),
    array(
        'nom' => 'Figaro',
        'cognom' => 'el gato',
        'img' => 'figaro.jpg'
    ),
    array(
        'nom' => 'Pepito',
        'cognom' => 'i Marieta',
        'img' => 'pim.jpg'
    ),
    array(
        'nom' => 'Pepito',
        'cognom' => 'Perez',
        'img' => 'perez.jpg'
    ),

);
$_SESSION["fo"] = 0;
$_SESSION["login"] = 0;

$_SESSION["pass"] = "admin";
$_SESSION["cards"] = array(
    (object) array('titulo' => 'Sulley', 'img' => 'sulley.jpeg', "likes" => 3, 'des' => "James P. Sullivan es miembro de una estirpe familiar bien conocida por sus dotes para los sustos. Desde que Mike se encargó de bajar sus aires de grandeza en la universidad, Sulley pasó a ser un monstruo atento, adorable y bastante bonachón. Quizás por eso cae rendido ante la tierna Boo, con la que establecerá una de las amistades más recordadas del cine.", 'comentario' => "Sulley: 'Mike, ¿crees que Boo nos extrañará cuando volvamos a Monstruópolis?'"),
    (object) array('titulo' => 'Mike', 'img' => 'mike.jpeg', "likes" => 8, 'des' => "Entre los personajes de ‘Monstruos S.A.’, sin duda, Mike es el que aporta más momentos de diversión. Es el compañero todoterreno de Sulley. En España le pone voz el cómico y actor José Mota. Para conocer su historia a fondo es muy recomendable ver la cinta precuela, ‘Monstruos University’, donde Mike descubre el mundo de los sustos y se ve obligado a demostrar sus dotes como estratega frente a otros monstruos mucho más terroríficos.", 'comentario' => "Mike: 'Boo es increíble, ¿verdad? No puedo creer que un niño humano nos haya robado el corazón.'"),
    (object) array('titulo' => 'Boo', 'img' => 'boo.jpeg', "likes" => 5, 'des' => "Pese a su cortísima edad, Boo es experta en demostrar que no le tiene miedo a nada. Prueba de ello es cuando atraviesa la puerta de su dormitorio, se cuela en Monstruópolis y persigue a Sulley como si fuese su ‘gatito’. Se encargará de ganarse la simpatía de los dos protagonistas de ‘Monstruos S.A.’ por su carácter adorable, pero también por su capacidad para enfrentarse a Randall.", 'comentario' => "Boo: '¡Mike, Sulley! ¡Jugar a asustar es divertido, pero prefiero los abrazos!'"),
    (object) array('titulo' => 'Randall', 'img' => 'randall.jpeg', "likes" => 2, 'des' => "Poco tiene que ver el Randall que compartía habitación con Mike en la universidad con el ambicioso monstruo que amenaza a Boo en ‘Monstruos S.A’.", 'comentario' => "Randall: '¿Creen que Boo pueda abrir puertas a otros mundos? Eso podría ser muy útil para mí.'"),

);
$_SESSION["USER"] =
    [
        [
            'username' => 'juan',
            'pass' => '12345',
            'amics' => [
                ['nom' => 'Toni', 'cognom' => 'Oller', 'img' => 'toni.jpeg'],
                ['nom' => 'Ikram', 'cognom' => 'Bghiel', 'img' => 'ikram.jpeg'],
                ['nom' => 'Neus', 'cognom' => 'Vidal', 'img' => 'neus.jpeg'],

            ]
        ],
        [
            'username' => 'Ikram',
            'pass' => '12345',
            'amics' => [

                ['nom' => 'Toni', 'cognom' => 'Oller', 'img' => 'toni.jpeg'],
                ['nom' => 'Juan', 'cognom' => 'Vidal', 'img' => 'juan.jpeg'],
                ['nom' => 'Neus', 'cognom' => 'Vidal', 'img' => 'neus.jpeg'],
                ['nom' => 'Gepeto', 'cognom' => 'Perez', 'img' => 'gepeto.png'],
                ['nom' => 'Perez', 'cognom' => 'Perez', 'img' => 'perez.jpg']
            ]
        ]
    ];