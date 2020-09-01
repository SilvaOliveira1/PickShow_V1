<?php

namespace App\Profissional;

class Profissional
{
    private $nomeProfissional;
    private $sobrenomeProfissional;
    private $emailProfissional;
    private $senhaProfissional;
    private $cnpjProfissional;
    private $areaatuacaoProfissional;

    // CNPJ
    public function getCnpjProfissional()
    {
        return $this->cnpjProfissional;
    }
    public function setCnpjProfissional($cnpjProfissional)
    {
        $this->cnpjProfissional = $cnpjProfissional;
    }
    // Senha
    public function getSenhaProfissional()
    {
        return $this->senhaProfissional;
    }
    public function setSenhaProfissional($senhaProfissional)
    {
        $this->senhaProfissional = $senhaProfissional;
    }
    // EMAIL
    public function getEmailProfissional()
    {
        return $this->emailProfissional;
    }
    public function setEmailProfissional($emailProfissional)
    {
        $this->emailProfissional = $emailProfissional;
    }
    // SOBRENOME
    public function getSobrenomeProfissional()
    {
        return $this->sobrenomeProfissional;
    }
    public function setSobrenomeProfissional($sobrenomeProfissional)
    {
        $this->sobrenomeProfissional = $sobrenomeProfissional;
    }
    // NOME
    public function getNomeProfissional()
    {
        return $this->nomeProfissional;
    }
    public function setNomeProfissional($nomeProfissional)
    {
        $this->nomeProfissional = $nomeProfissional;
    }
    // AREA ATUAÇÂO
    public function getAreaatuacaoProfissional()
    {
        return $this->areaatuacaoProfissional;
    }
    public function setAreaatuacaoProfissional($areaatuacaoProfissional)
    {
        $this->areaatuacaoProfissional = $areaatuacaoProfissional;
    }
}
