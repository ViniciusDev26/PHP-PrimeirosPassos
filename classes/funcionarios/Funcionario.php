<?php

	namespace classes\funcionarios;

	class Funcionario{
		private $nome;
		private $cpf;
		private $salario;

        public function __get($atributo){
        	return $this->$atributo;
        }

        public function __set($atributo,$valor){
        	$this->$atributo = $valor;
        }

	}