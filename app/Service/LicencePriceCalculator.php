<?php
/*
namespace MonNamespace;

function strlen()
{
    echo 'Hello world !';
}

strlen();
AFFICHERA hello world
*/
/*
    namespace MonNamespace;

    function strlen()
    {
        echo 'Hello world !';
    }

    echo \strlen('Hello world !');
AFFICHERA 13
*/
namespace App\Service;


class LicensePriceCalculator

{

    public static function calculatePrice(int $teamSize): float//retourne un float
    {
        return $teamSize <= 5 ?
            $teamSize * 15
            : 50 + ($teamSize - 5) * 10;
    }

}


//pour appeler la class LicensePriceCalculator::calculateAmount();

