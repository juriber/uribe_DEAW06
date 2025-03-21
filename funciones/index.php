<?php
/**
 * Este archivo es la entrada principal de la aplicación.
 * 
 * Incluye las funciones de suma y saludo y las ejecuta.
 * 
 * @package MiApellido_DEAW06
 * @author Tu Nombre
 * @version 1.0
 */

// Incluye los archivos con las funciones
include 'funcion1.php';
include 'funcion2.php';
include 'funcion3.php';

// Llamada a la función suma
echo suma(5, 7);  // Llama a la función suma y muestra el resultado

// Llamada a la función saludo
echo saludo("Juan");  // Llama a la función saludo y muestra el saludo


// Llamada a la función área del círculo
$radio = 5;  // Definir el radio
$area = area_circulo($radio);  // Llama a la función área_circulo y almacena el resultado
echo "El área del círculo con radio $radio es: $area";  // Muestra el resultado
?>
