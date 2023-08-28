<?php

require_once('../Model/Client.php');
require_once('../Model/Trip.php');

try {
    $origem = $_POST['origem'];
    $destino = $_POST['destino'];
    $ida = $_POST['ida'];
    $volta = $_POST['volta'];
    $adulto = $_POST['adulto'];
    $crianca = $_POST['crianca'];
    $classe = $_POST['classe'];
    $preco = "1.500,35";

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];

    $client = new Client($nome, $cpf, $telefone, $email, $cep, $endereco, $numero, $bairro, $cidade, $uf);
    $trip = new Trip($origem, $destino, $ida, $volta, $adulto, $crianca, $classe, $preco);
} catch (Exception $error) {
    echo "<script> alert('" . $error->getMessage() . "') </script>";

    echo '<script> history.back() </script>';
}
