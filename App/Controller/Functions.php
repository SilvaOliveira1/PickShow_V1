<?php
namespace App\Controller;
use App\Cliente\Cliente;
use App\Core\Conexao;

class Functions{
     function insertDadosBD($clienteObjeto,$profissionalObjeto,$tipoOperacao){
         //Definindo uma estancia do methodo getConexao() de maneira geral(dentro do methodo) para todos os switchs usar;
         $conexaoObjeto = new Conexao;
         $conexaoMySQL = $conexaoObjeto->getConexao();
        //  Methodo especifico para fazer a inserção dos dados no banco de dados de cada individuo(Cliente, Profissional);
        //  1 - Cliente; 2 - Profissional
        switch ($tipoOperacao) {
            // Cliente
            case 1:
            //Estanciando um novo objeto
            $clienteObjeto = new Cliente;
            // Pegando dados do objeto para inserir na tabela cliente
            $nomeCliente        = $clienteObjeto->getNomeCliente();
            $sobrenomeCliente   = $clienteObjeto->getSobrenomeCliente();
            $emailCliente       = $clienteObjeto->getEmailCliente();
            $senhaCliente       = $clienteObjeto->getSenhaCliente();
            $cpfCliente         = $clienteObjeto->getCpfCliente();

            $insertDadosCliente = "INSERT INTO `clientenovo` VALUES(NULL, '$nomeCliente', '$sobrenomeCliente', '$emailCliente', '$senhaCliente', '$cpfCliente')";
            mysqli_query($conexaoMySQL,$insertDadosCliente) or die("Error ao inserir dados" . mysqli_error($conexaoMySQL));
            unset($conexaoMySQL);
            return 1;
            break;
            // Profissional
            case 2:
            break;
            default:
                // retornar algum error
                return 0;
            break;
        }
    }
}