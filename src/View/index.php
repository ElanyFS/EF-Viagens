<?php include_once('../includes/header.php'); ?>
        <div class="container">
            <div class="content-img">
                <h2>EF - Viagens</h2><br>
                <p>Descubra o mundo com as melhores ofertas em passagens, e faça da sua próxima viagem uma experiência inesquecível.</p>
            </div>
            <div class="content">
                <h2>Passagens</h2>
                <div class="content-form">

                    <form action="Person.php" method="get">
                        <div class="input-group w50">
                            <label for="">Origem</label>
                            <input type="text" name="origem">
                        </div>

                        <div class="input-group w50">
                            <label for="">Destino</label>
                            <input type="text" name="destino">
                        </div>

                        <div class="input-group w50">
                            <label for="">Ida</label>
                            <input type="date" name="ida">
                        </div>

                        <div class="input-group w50">
                            <label for="">Volta</label>
                            <input type="date" name="volta">
                        </div>

                        <div class="input-group w50">
                            <label for="">Adulto</label>
                            <input type="number" name="adulto">
                        </div>

                        <div class="input-group w50">
                            <label for="">Criança</label>
                            <input type="number" name="crianca">
                        </div>

                        <div class="input-group">
                            <label for="">Classe</label>
                            <select name="classe" id="">
                                <option selected value="Econômica">Econômica</option>
                                <option value="Econômica Premium">Econômica Premium</option>
                                <option value="Executiva/Business">Executiva/Business</option>
                                <option value="Primeira Classe">Primeira Classe</option>
                            </select>
                        </div>

                        <div class="input-submit">
                            <button type="submit">Comprar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php include_once('../includes/footer.php'); ?>