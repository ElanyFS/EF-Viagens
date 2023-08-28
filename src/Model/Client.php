<?php

class Client
{
    public string $nome;
    public string $cpf;
    public string $telefone;
    public string $email;
    public string $cep;
    public string $endereco;
    public string $numero;
    public string $bairro;
    public string $cidade;
    public string $uf;

    public function __construct($nome, $cpf, $telefone, $email, $cep, $endereco, $numero, $bairro, $cidade, $uf)
    {
        if (!$this->CepValid($cep)) throw new Exception("Cep inválido!");
        if (!$this->TelValid($telefone)) throw new Exception("Telefone inválido!");
        if (!$this->EmailValid($email)) throw new Exception("E-mail inválido!");
        if (!$this->CpfValid($cpf)) throw new Exception("Cpf inválido");

        $this->nome = $nome;
        $this->cpf = $this->removeFormatter($cpf);
        $this->telefone = $this->removeFormatter($telefone);
        $this->email = $email;
        $this->cep = $this->removeFormatter($cep);
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->uf = $uf;
    }

    // Validação do CEP : 65.066-320

    public function CepValid($cep)
    {
        if (strlen($cep) === 10) {
            $regex = "/^[0-9]{2}\.[0-9]{3}\-[0-9]{3}$/";

            return preg_match($regex, $cep);
        } else {
            return false;
        }
    }

    // Validação do CEP : (99) 98492-5634
    public function TelValid($telefone)
    {
        if (strlen($telefone) === 14) {
            $regex = "/^\([0-9]{2}\)[0-9]{5}\-[0-9]{4}$/";

            return preg_match($regex, str_replace(" ", "", $telefone));
        } else {
            return false;
        }
    }

    public function EmailValid($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public function CpfValid($cpf)
    {

        // i: Isso geralmente indica que a correspondência deve ser feita sem 
        // diferenciação entre maiúsculas e minúsculas, tornando a correspondência 
        // de texto insensível a maiúsculas e minúsculas.
        // s: O significado exato desse modificador depende da linguagem de 
        // programação, mas geralmente está relacionado ao comportamento do ponto (.). 
        // Em algumas linguagens, s faz com que o ponto corresponda a todos os caracteres, 
        // incluindo quebras de linha. Sem o s, o ponto normalmente corresponde a todos os 
        // caracteres, exceto quebras de linha.

        // Extrai somente numeros
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequencia de digitos repetidos. 
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }

        return true;
    }

    public function removeFormatter($info)
    {
        $dado = str_replace(['.', ',', '/', '(', ')','-'], "", $info);

        return $dado;
    }
}
