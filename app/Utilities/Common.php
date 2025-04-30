<?php

namespace App\Utilities;

class Common
{
    public static function validateMontserratType(string $montserrat): string
    {
        // Lookup table o mapeo de búsqueda, esto sustituye al switch - (Sintaxis básica)
        /*$map = [
            'font-thin'      => 'Montserrat fina',
            'font-regular'   => 'Montserrat regular',
            'font-bold'      => 'Montserrat negrita',
            'font-extrabold' => 'Montserrat muy negrita',
            'font-black'     => 'Montserrat súper negrita',
        ];

        return $map[$montserrat] ?? 'La fuente no es Montserrat';*/

        // Lookup sintaxis inline
        $lookup = [
            'font-thin'      => 'Montserrat fina',
            'font-regular'   => 'Montserrat regular',
            'font-bold'      => 'Montserrat negrita',
            'font-extrabold' => 'Montserrat muy negrita',
            'font-black'     => 'Montserrat súper negrita',
        ][$montserrat] ?? 'La fuente no es Montserrat';

        return $lookup;
    }
}