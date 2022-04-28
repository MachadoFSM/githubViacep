<?php 

require_once "end.php";

if(isset($_POST['cep'])){

    if ( session_status() !== PHP_SESSION_ACTIVE ){
    session_start();
    }
    $cep = $_POST['cep'];
    $cepSh = str_replace("-", "", $cep);
    $_SESSION['cep_session'] = $cepSh;
    if(isset($cep_end)){
    
/*
    $_SESSION['cep_r'] = $arrCidade->cep;
    $_SESSION['logradouro_r'] = $arrCidade->logradouro;
    $_SESSION['bairro_r'] = $arrCidade->bairro;
    $_SESSION['localidade_r'] = $arrCidade->localidade;
    $_SESSION['uf_r'] = $arrCidade->uf;
    $_SESSION['ddd_r'] = $arrCidade->ddd;
*/

    echo"CEP: ".$_SESSION['cep_r']."</br>";
    echo"Lagradouro: ".$_SESSION['logradouro_r']."</br>";
    echo"Bairro: ".$_SESSION['bairro_r']."</br>";
    echo"Localidade: ".$_SESSION['localidade_r']."</br>";
    echo"UF: ".$_SESSION['uf_r']."</br>";
    echo"DDD: ".$_SESSION['ddd_r']."</br>";
    }    
    header('Location: inicio.php');
}else{
    echo"Digite o CEP!";
}


?>