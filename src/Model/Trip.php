<?php

class Trip
{
    public string $origem;
    public string $destino;
    public string $ida;
    public string $volta;
    public string $adulto;
    public string $crianca;
    public string $classe;
    public string $preco;

    public function __construct($origem, $destino, $ida, $volta, $adulto, $crianca, $classe, $preco)
    {
        $this->origem = $origem;
        $this->destino = $destino;
        $this->ida = $ida;
        $this->volta = $volta;
        $this->adulto = $adulto;
        $this->crianca = $crianca;
        $this->classe = $classe;
        $this->preco = $this->convertPreco($preco);
    }

    public function precoValid($preco){
        $regex = "/^[0-9]{1,3}([.][0-9]{3})*[,][0-9]{2}$/";
        return preg_match($regex, $preco);
    }

    public function convertPreco($preco){
        $numero_valido = str_replace(',', '.', $preco);
        $numero_valido = str_replace('.', '', substr($numero_valido, 0, -3)) . substr($numero_valido,-3);
        return doubleval($numero_valido);
    }
}
