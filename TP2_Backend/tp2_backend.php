<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clase03</title>
</head>
<body>

    <?php
        // 1- Crear una variable n y validar que sea positivo.
        $n = 13;
        if( $n > 0 ) {
            echo '1- El valor '. $n . ', es postivo';
            echo '<br>';
        } else {
            echo '1- El valor de n, es negativo';
            echo '<br>';
        };
        
        // 2- Crear una variable n y validar que sea un numero mayor a 1 y menor que 10.
        $n= 4;
        if( $n > 1 && $n < 10 ) {
            echo '2- La variable n: ' . $n .', es mayor a 1 y menor a 10';
            echo '<br>';
        } else {
            echo '2- La variable no cumple la condicion';
        };

        // 3- Crear una variable n y vidar que sea un numero mayor a 10 y menor que 2.
        $n= 6;
        if( $n > 10 || $n < 2 ) {
            echo '3- La variable n =' . $n .', es mayor a 10 y menor a 2. <br>';
            
        } else {
            echo '3- la variable no cumple la condicion. <br>';
            
        };

        // 4- Crear dos variables, llamadaS numero1 y la otra variable2. 
        // Si numero1 es mayor a numero2, mostrar en pantalla la suma y la resta.
        // Si numero2 es mayor a numero1, mostrar por pantalla la multiplicacion, divicion entera y resto de la divicion. 
        // Si numero1 y numero2 son iguales, mostrar mensaje "lOS NUMEROS INGRESADOS SON IGUALES".

        $numero1 = 22;
        $numero2 = 26;

        // Condiciones:
        if( $numero1 > $numero2 ){

            $suma = $numero1 + $numero2;
            $resta = $numero1 - $numero2;

            echo '4- La suma de los numeros es: '.$suma. '<br>';
            echo '4.b La resta de los numeros es: '.$resta. '<br>';

        } else if ( $numero2 > $numero1 ) {
            
            $multiplo = $numero1 * $numero2;
            $division = $numero1 / $numero2;
            $resto = $numero1 % $numero2;
            
            echo '4.c La multiplicacion de los numeros es: '.$multiplo. '<br>';
            echo '4.c La division de los numeros es: '.$division. '<br>';
            echo '4.c El Resto de los numeros es: '.$resto. '<br>';

        } else {
            echo "4.d Los numero ingresados son iguales!! <br>";
        } 

    ?>
</body>
</html>