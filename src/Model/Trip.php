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

    public function __construct($origem, $destino, $ida, $volta, $adulto, $crianca, $classe)
    {
        $this->origem = $origem;
        $this->destino = $destino;
        $this->ida = $ida;
        $this->volta = $volta;
        $this->adulto = $adulto;
        $this->crianca = $crianca;
        $this->classe = $classe;
    }
}
