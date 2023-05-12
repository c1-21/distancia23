<?php
    /**
    * @author Jose Gallardo
    * @version 1.0
    *
    */

    /**
     * Clase MiClase
     * Esta clase muestra ejemplos de métodos documentados.
     */

    echo "Metodos en PHP</br>";
class MiClase {
    /**
     * Método para saludar.
     * Muestra un saludo en la salida.
     */
    public function saludar() {
        echo "¡Hola Jose!";
    }

}

    // Crear una instancia de la clase
    $objeto = new MiClase();

    // Llamar a los métodos
    $objeto->saludar();


    /**
     * Clase Calculadora
     * Esta clase representa una calculadora simple con un método para realizar una suma.
     */
    class Calculadora {
    /**
     * Método para realizar una suma.
     *
     * @param int $num1 El primer número de la suma.
     * @param int $num2 El segundo número de la suma.
     * @return int El resultado de la suma.
     */
    public function suma($num1, $num2) {
        $resultado = $num1 + $num2;
        return $resultado;
    }
}

    // Crear una instancia de la clase
    $calculadora = new Calculadora();

    // Realizar una suma utilizando el método de la clase
    $num1 = 5;
    $num2 = 3;
    $resultadoSuma = $calculadora->suma($num1, $num2);

    echo "El resultado de la suma es: " . $resultadoSuma;



    

    echo "<br/> Hasta pronto!!<br/>";
?>
