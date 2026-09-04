<?php
$notaFinal = calcularMedia(8.5, 7.0);
echo $notaFinal;

function calcularMedia($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;
    
    if ($media >= 7.0) {
        return "Média: $media. Status: Aprovado! 🎉";
    } else {
        return "Média: $media. Status: Reprovado. 📚";
    }
}
?>
