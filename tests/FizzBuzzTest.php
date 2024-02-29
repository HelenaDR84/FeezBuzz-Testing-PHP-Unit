<?php
use MyNamespace\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {

    // Prueba para verificar si se genera correctamente la lista de FizzBuzz
    public function testGenerateFizzBuzzList() {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->generateFizzBuzzList();

        // Verificar que la lista tiene 100 elementos
        $this->assertCount(100, $result, 'La lista no tiene 100 elementos');

        // Verificar que cada elemento cumple con las reglas de FizzBuzz
        foreach ($result as $i => $value) {
            if (($i + 1) % 3 === 0 && ($i + 1) % 5 === 0) {
                $this->assertEquals('FizzBuzz', $value, "Error en el elemento $i");
            } elseif (($i + 1) % 3 === 0) {
                $this->assertEquals('Fizz', $value, "Error en el elemento $i");
            } elseif (($i + 1) % 5 === 0) {
                $this->assertEquals('Buzz', $value, "Error en el elemento $i");
            } else {
                $this->assertEquals($i + 1, $value, "Error en el elemento $i");
            }
        }
    }
}

?>
