<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $para = "extralg21@gmail.com";
    $assunto = "Informações do Cadastro - $nome";
    $corpo = "Nome: $nome\nE-mail: $email\nCEP: $cep\nRua: $rua\nNº: $numero\nComplemento: $complemento\nCidade: $cidade\nUF: $uf";
    mail($para, $assunto, $corpo);
?>
