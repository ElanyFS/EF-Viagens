<?php
include_once('../includes/header.php');
require_once('../Controller/ShoppingController.php');
require_once('../Service/formatter.php');
?>

<div class="content-info">
    <h2>Passagens compradas</h2>

    <table class="rTable">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF/CNPJ</th>
                <th>Telefone</th>
                <th>Ida</th>
                <th>Volta</th>
                <th>Tipo</th>
                <th>Cep</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $client->nome ?></td>
                <td><?php echo formatterCpf($client->cpf) ?></td>
                <td><?php echo formatterTel($client->telefone) ?></td>
                <td><?php echo formatterDate($trip->ida) ?></td>
                <td><?php echo formatterDate($trip->volta) ?></td>
                <td><?php echo $trip->classe ?></td>
                <td><?php echo formatterCep($client->cep)?></td>
                <td><?php echo formatterPreco($trip->preco) ?></td>
            </tr>
        </tbody>

    </table>
</div>
<?php include_once('../includes/footer.php'); ?>