<?php
    /**
    * @author Jose Gallardo LInares
    * @version 1.0.1
    * @example Etiqueta para ejemplo de modificacion
    */


    /**
    * Esta función devuelve un saludo con el nombre que le
    * enviamos en la llamada
    * @param string $nombre Es el nombre de la persona a la que saludamos
    * @return string Saludo a la persona solcitada
    *
    */


    function saludar($nombre) {
        echo "¡Hola, " . $nombre . "!";
    }

    // Llamada a la función para saludar a Jose
    saludar("Jose Gallardo");

  
 
    /**
     * Función que suma dos números enteros.
     *
     * @param int $num1 Primer número entero.
     * @param int $num2 Segundo número entero.
     * @return int La suma de los dos números.
     */
    function sumar($num1, $num2) {
        $resultado = $num1 + $num2;
        return $resultado;
    }

    // Llamada a la función para sumar dos números
    $num1 = 5;
    $num2 = 3;
    $resultadoSuma = sumar($num1, $num2);

    echo "El resultado de la suma es: " . $resultadoSuma;


    echo "Funciones en PHP</br>";
    saluda("Jose Gallardo");
    echo "<br/> La suma de 25 y 20 es : ".sumar(25,20);
    echo "<br/> Hasta pronto!!<br/>";

?>
