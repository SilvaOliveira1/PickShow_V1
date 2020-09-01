<?php
namespace App\Cliente;

class Cliente
{
    private $nomeCliente;
    private $sobrenomeCliente;
    private $emailCliente;
    private $senhaCliente;
    private $cpfCliente;

    // CPF
    public function getCpfCliente()
    {
        return $this->cpfCliente;
    }
    public function setCpfCliente($cpfCliente)
    {
        $this->cpfCliente = $cpfCliente;
    }
    // Senha
    public function getSenhaCliente()
    {
        return $this->senhaCliente;
    }
    public function setSenhaCliente($senhaCliente)
    {
        $this->senhaCliente = $senhaCliente;
    }
    // EMAIL
    public function getEmailCliente()
    {
        return $this->emailCliente;
    }
    public function setEmailCliente($emailCliente)
    {
        $this->emailCliente = $emailCliente;
    }
    // SOBRENOME
    public function getSobrenomeCliente()
    {
        return $this->sobrenomeCliente;
    }
    public function setSobrenomeCliente($sobrenomeCliente)
    {
        $this->sobrenomeCliente = $sobrenomeCliente;
    }
    // NOME
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }
    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }
}
