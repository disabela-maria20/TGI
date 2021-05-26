<?php
    class Endereco_Service{
        private $conexao;
        private $endereco;

        public function __construct(Conexao $conexao, Endereco_Cliente $endereco) {
            $this->conexao = $conexao->conectar();
            $this->endereco = $endereco;
        }
        public function Cadastrar_Endereco(){
            $query = '
            INSERT INTO endereco(cep, endereco, numero, bairro, cidade, uf, complemento) 
            VALUES (:cep ,:endereco ,:numero ,:bairro, :cidade, :uf, :complemento)';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':cep', $this->endereco->__get('cep'));
            $stmt->bindValue(':endereco', $this->endereco->__get('endereco'));
            $stmt->bindValue(':numero', $this->endereco->__get('numero'));
            $stmt->bindValue(':bairro', $this->endereco->__get('bairro'));
            $stmt->bindValue(':uf', $this->endereco->__get('uf'));
            $stmt->bindValue(':cidade', $this->endereco->__get('cidade'));
            $stmt->bindValue(':complemento', $this->endereco->__get('complemento'));

            $stmt->execute();
        }
    
    }
?>