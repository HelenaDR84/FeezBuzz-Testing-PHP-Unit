<?php

namespace MyNamespace;

class FizzBuzz
{
    public function generateFizzBuzzList($start = 1, $end = 100)
    {
        // Inicializo un array para almacenar los resultados
        $result = [];

        // Itero a través de los números del rango especificado
        for ($i = $start; $i <= $end; $i++) {
            // Inicializo la variable de salida como una cadena vacía
            $output = '';

            // Compruebo si el número actual es divisible por 3
            if ($i % 3 === 0) {
                // Si es divisible por 3, añadimos 'Fizz' a la salida
                $output .= 'Fizz';
            }

            // Compruebo si el número actual es divisible por 5
            if ($i % 5 === 0) {
                // Si es divisible por 5, añadimos 'Buzz' a la salida
                $output .= 'Buzz';
            }

            // Si la salida todavía está vacía, añado el número actual
            $result[] = ($output !== '') ? $output : $i;
        }

        // Nos devuelve el array con los resultados
        return $result;
    }
}

?>
