<?php include_once('../includes/header.php'); ?>

<div class="content-info">
    <h2>Informações</h2>

    <form action="Shopping.php" method="post">
        <div class="input-group w50">
            <label for="">Nome completo:</label>
            <input type="text" name="nome">
        </div>

        <div class="input-group w50">
            <label for="">Cpf:</label>
            <input type="text" name="cpf" id="cpf" class="cpf" autocomplete="off" maxlength="14">
        </div>

        <div class="input-group w50">
            <label for="">Telefone:</label>
            <input type="text" name="telefone" id="telefone">
        </div>

        <div class="input-group w50">
            <label for="">E-mail:</label>
            <input type="text" name="email">
        </div>

        <hr>

        <div class="input-group w33">
            <label for="">CEP:</label>
            <input type="text" name="cep" id="cep">
        </div>

        <div class="input-group w33">
            <label for="">Endereço:</label>
            <input type="text" name="endereco">
        </div>

        <div class="input-group w33">
            <label for="">Número:</label>
            <input type="number" name="numero">
        </div>

        <div class="input-group w33">
            <label for="">Bairro:</label>
            <input type="text" name="bairro">
        </div>

        <div class="input-group w33">
            <label for="">Cidade:</label>
            <input type="text" name="cidade">
        </div>

        <div class="input-group w33">
            <label for="">UF:</label>
            <input type="text" name="uf">
        </div>

        <div class="inputs-hidden">
            <input type="hidden" name="origem" value="<?php echo $_GET['origem'] ?>">
            <input type="hidden" name="destino" value="<?php echo $_GET['destino'] ?>">
            <input type="hidden" name="ida" value="<?php echo $_GET['ida'] ?>">
            <input type="hidden" name="volta" value="<?php echo $_GET['volta'] ?>">
            <input type="hidden" name="adulto" value="<?php echo $_GET['adulto'] ?>">
            <input type="hidden" name="crianca" value="<?php echo $_GET['crianca'] ?>">
            <input type="hidden" name="classe" value="<?php echo $_GET['classe'] ?>">
        </div>

        <div class="input-submit">
            <button type="submit">Concluir</button>
        </div>
    </form>
</div>
<?php include_once('../includes/footer.php'); ?>