<?php
function converterCelsius($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    $kelvin = $celsius + 273.15;

    echo "--- Conversor de Temperatura ---\n";
    echo "Celsius: $celsius°C\n";
    echo "Fahrenheit: $fahrenheit°F\n";
    echo "Kelvin: $kelvin K\n";
}

// Testando o exercício
converterCelsius(25);
?>
