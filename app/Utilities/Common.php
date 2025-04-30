<?php

namespace App\Utilities;

class Common
{
    public static function validateMontserratType(string $montserrat): string
    {
        $typeFont = '';

        switch ($montserrat) {
            case 'font-thin':
                $typeFont = 'Montserrat fina';
                break;
            case 'font-regular':
                $typeFont = 'Montserrat regular';
                break;
            case 'font-bold':
                $typeFont = 'Montserrat negrita';
                break;
            case 'font-extrabold':
                $typeFont = 'Montserrat muy negrita';
                break;
            case 'font-black':
                $typeFont = 'Montserrat súper negrita';
                break;
            default:
                $typeFont = 'La fuente no es Montserrat';
                break;
        }

        return $typeFont;
    }
}