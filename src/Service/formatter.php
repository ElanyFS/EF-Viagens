<?php

function formatterCpf($cpf)
{
    // 111.111.111-11
    if (strlen($cpf) == 11) {
        $CpfFormat = substr($cpf, 0, 3) . '.';
        $CpfFormat .= substr($cpf, 3, 3) . '.';
        $CpfFormat .= substr($cpf, 6, 3) . '-';
        $CpfFormat .= substr($cpf, 9, 2);
    }

    return $CpfFormat;
}

function formatterTel($tel){
    // (99) 9 9999-9999
    if(strlen($tel) == 11){
        $telFormat = '(' . substr($tel, 0,2) . ')';
        $telFormat .= ' ' . substr($tel, 2,1);
        $telFormat .= ' ' . substr($tel, 3,4) . '-';
        $telFormat .= substr($tel, 7,4);
    }

    return $telFormat;
}

function formatterCep($cep){
    // 65.066-320
    if(strlen($cep) == 8){
        $cepFormat = substr($cep, 0,2) . ".";
        $cepFormat .= substr($cep, 2,3) . '-';
        $cepFormat .= substr($cep, 5,3);
    }

    return $cepFormat;
}

function formatterPreco($preco){
    $precoFormat = 'R$ ' . number_format($preco, 2, ',', '.');
    return $precoFormat;
}

function formatterDate($data){
    $dateFormat = date('d/m/Y', strtotime($data));
    return $dateFormat;
}