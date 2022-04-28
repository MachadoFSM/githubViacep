<?php
include "script.php";
if(isset($_SESSION['cep_session'])){
$cep_end = $_SESSION['cep_session'];
$str = file_get_contents('https://viacep.com.br/ws/' . $cep_end . '/' .'json/');
$arrCidade = json_decode($str);
if($arrCidade != null){
    $_SESSION['cep_r'] = $arrCidade->cep;
    $_SESSION['logradouro_r'] = $arrCidade->logradouro;
    $_SESSION['bairro_r'] = $arrCidade->bairro;
    $_SESSION['localidade_r'] = $arrCidade->localidade;
    $_SESSION['uf_r'] = $arrCidade->uf;
    $_SESSION['ddd_r'] = $arrCidade->ddd;
}
}
?>