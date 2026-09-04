<?php
function validarSenha($senha) {
    $tamanho = strlen($senha);

    if ($tamanho >= 8) {
        return "Senha válida e segura! ✔️";
    } else {
        return "Erro: A senha precisa ter pelo menos 8 caracteres. Fornecidos: $tamanho. ❌";
    }
}

// Testando senhas diferentes
echo validarSenha("12345") . "\n";
echo validarSenha("php_e_muito_bom_123") . "\n";
?>

