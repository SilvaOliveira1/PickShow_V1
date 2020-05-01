<?php

use App\Cliente\Cliente;
use App\Controller\Functions;
use App\Profissional\Profissional;
require '../autoload.php';
class ProcessaDadosCliente{

    function pegaDadosCliente(){
        
        $clienteObjeto = new Cliente();
        $teste = new Functions();
        $profissionalObjeto = new Profissional();

        $clienteObjeto->setNomeCliente($_POST['nomeC']);
        $clienteObjeto->setSobrenomeCliente($_POST['sobrenomeC']);
        $clienteObjeto->setEmailCliente($_POST['emailC']);
        $clienteObjeto->setSenhaCliente($_POST['senhaC']);
        $clienteObjeto->setCpfCliente($_POST['cpfC']);
        
        if($teste->insertDadosBD($clienteObjeto, $profissionalObjeto, 1) == 1){
            return "SIm";
        }else{
            return "Não";
        }
    }
}
$as = new ProcessaDadosCliente;
echo $as->pegaDadosCliente();