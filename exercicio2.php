<?php
echo "--- Loop FOR (Contando de 1 a 5) ---\n";
for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i\n";
}

echo "\n--- Loop WHILE (Contagem regressiva) ---\n";
$contador = 3;
while ($contador > 0) {
    echo "Lançamento em: $contador...\n";
    $contador--; // Diminui 1 do valor
}
echo "Fogo! 🚀";
?>
