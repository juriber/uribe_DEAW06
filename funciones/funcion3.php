<?php
/**
 * Calcula el área de un círculo dado su radio.
 *
 * @param float $radio El radio del círculo.
 * @return float El área del círculo.
 */
function area_circulo($radio) {
    return pi() * pow($radio, 2);  // Fórmula para el área de un círculo: π * radio^2
}
?>
