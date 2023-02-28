<?php
//Classe com o nome Pessoa
class Pessoa{
    //Objetos com visibilidade privada
	private $nome;
	private $endereco;
	private $bairro;
	private $cep;
	private $cidade;
	private $estado;

    //Método de captura de valor de objeto
	public function getNome(){
		return $this->nome;
	}

    //Método de alteração de valor de objeto
	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

    /*
    Criar os respectivos métodos GETs e SETs.
    */

}

?>