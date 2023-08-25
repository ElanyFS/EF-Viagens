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
        if (!$this->TelValid($telefone))throw new Exception("Telefone inválido!");
        if (!$this->EmailValid($email)) throw new Exception("E-mail inválido!");

        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->cep = $cep;
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
}
