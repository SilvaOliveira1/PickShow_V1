<?php
namespace App\Core;
class Conexao{

        private $aServidor;
		private $aUsuario;
		private $aSenha;
		private $aBanco;

		#Construtor da Classe
		function Conexao(){
			$this->aServidor = "localhost";
			$this->aUsuario  = "root";
			$this->aSenha    = "";
			$this->aBanco    = "bd_pickshow";
		}

		#Retorna uma conexão MySQL ativa
		public function getConexao(){
			$aConexao = mysqli_connect($this->aServidor, $this->aUsuario, $this->aSenha, $this->aBanco) or die(mysqli_connect_error());
			return $aConexao;

			#Destroi a referência à variável
			unset($aConexao);
		}
}