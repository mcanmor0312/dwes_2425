<?php

    /*
        Ejemplo 13.

        Array o Matrices

        Matriz bidimensional con:

            - índice primario: escalar
            - índice secundario: asociativo
    */

    // Usando corchetes
    $alumno = 
            [ 
                [ 
                    'id' => 1,
                    'nombre' => 'Juan',
                    'apellidos' => 'García Pérez',
                    'fecha' => '2000/12/31',
                    'curso' => '2DAW',
                    'poblacion' => 'Ubrique'
                ],
                [ 
                    'id' => 2,
                    'nombre' => 'Pedro',
                    'apellidos' => 'Romero Pérez',
                    'fecha' => '2000/11/31',
                    'curso' => '2DAW',
                    'poblacion' => 'Villamartín'
                ],
                [ 
                    'id' => 3,
                    'nombre' => 'María',
                    'apellidos' => 'Pérez Garcés',
                    'fecha' => '1998/12/31',
                    'curso' => '2DAW',
                    'poblacion' => 'Bornos'
                ],
                [ 
                    'id' => 4,
                    'nombre' => 'Pedro',
                    'apellidos' => 'Rodríguez Sánchez',
                    'fecha' => '1995/12/31',
                    'curso' => '2DAW',
                    'poblacion' => 'Jerez de la Fra.'
                ]

            ];

    // muestra un valor de la matriz        
    //echo $alumno[2] ['nombre']; 
    //echo '<BR>';

   /* foreach ($alumno as $i => $array) {
        foreach ($array as $j => $valor) {
            echo 'matriz['.$i.']['.$j.'] = '.$valor;
            echo '<BR>';
        }
    }
        */

