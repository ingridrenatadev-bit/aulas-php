<?php
$idade = 17;

if ($idade < 12) {
    echo "Classificação: Criança";
} elseif ($idade >= 12 && $idade < 18) {
    echo "Classificação: Adolescente";
} elseif ($idade >= 18 && $idade < 60) {
    echo "Classificação: Adulto";
} else {
    echo "Classificação: Idoso";
}
?>
