<?php
    class Cadastro_Cliente {
        private $id;
        private $dataNasc;
        private $rg;
        private $cpf;
        private $tel;
        private $sexo;
        private $senha;
        private $confirmSenha;

        public function __get($atributo) {
            return $this->$atributo;
        }
    
        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }
    }
    class Endereco_Cliente {
        private $id_endereco;
        private $cep;
        private $endereco;
        private $numero;
        private $bairro;
        private $uf;
        private $cidade;
        private $complemento;

        public function __get($atributo) {
            return $this->$atributo;
        }
    
        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }
    }
?>