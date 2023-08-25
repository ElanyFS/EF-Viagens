<?php
include_once('../includes/header.php');
require_once('../Controller/ShoppingController.php');
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
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $client->nome ?></td>
                <td><?php echo $client->cpf ?></td>
                <td><?php echo $client->telefone ?></td>
                <td><?php echo $trip->origem ?></td>
                <td><?php echo $trip->volta ?></td>
                <td><?php echo $trip->classe ?></td>
                <td></td>
            </tr>
        </tbody>

    </table>
</div>
<?php include_once('../includes/footer.php'); ?>