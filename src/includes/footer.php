</main>

</body>

<script>
    const inputCpf = document.getElementById("cpf");

    inputCpf.addEventListener("keyup", formatarCPF);

    function formatarCPF(e) {

        var v = e.target.value.replace(/\D/g, "");

        v = v.replace(/(\d{3})(\d)/, "$1.$2");

        v = v.replace(/(\d{3})(\d)/, "$1.$2");

        v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

        e.target.value = v;
    }

    // MASCARA CEP

    const inputCep = document.getElementById("cep");

    inputCep.addEventListener('keyup', formatarCep);

    function formatarCep(e) {
        var v = e.target.value.replace(/\D/g, '');

        v = v.replace(/(\d{2})(\d{3})(\d)/, "$1.$2-$3");

        e.target.value = v;
    }

    // MASCARA TELEFONE

    const inputTel = document.getElementById("telefone");

    inputTel.addEventListener("keyup", formatarTelefone);

    function formatarTelefone(e) {

        var v = e.target.value.replace(/\D/g, "");

        v = v.replace(/^(\d\d)(\d)/g, "($1)$2");

        v = v.replace(/(\d{5})(\d)/, "$1-$2");

        e.target.value = v;
    }
</script>

</html>