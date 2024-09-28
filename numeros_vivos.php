<?php
/* El objetivo es crear una función que transforme un número entero aplicando estas reglas:

    Si el número es par, divídelo por 2.
    Si el número es impar, súmale 3.
    Si el número contiene un dígito 5, cámbialo por un 0.

Repite estas reglas hasta que el número llegue a 1.

El resultado final será la cantidad de veces que se aplicaron las reglas antes de alcanzar el 1. */

function juego_numeros_vivos(int $num): int
{
    $resultado = 0;
    while ($num != 1 && $num != 0) {
        $num = match (true) {
            str_contains((string) $num, '5') => (int) str_replace('5', '0', (string) $num),
            $num % 2 == 0 => $num / 2,
            default => $num + 3,
        };
        $resultado++;
    }
    return $resultado;
}

echo "Resultado para 5: " . juego_numeros_vivos(5) . "<br>";
echo "Resultado para 15: " . juego_numeros_vivos(15) . "<br>";
echo "Resultado para 0: " . juego_numeros_vivos(0) . "<br>";
echo "Resultado para 16: " . juego_numeros_vivos(16) . "<br>";
