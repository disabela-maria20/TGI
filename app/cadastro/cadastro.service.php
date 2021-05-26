<?php
    class Cadastro_Service{
        private $conexao;
        private $cadastro;

        public function __construct(Conexao $conexao, Cadastro_Cliente $cadastro) {
            $this->conexao = $conexao->conectar();
            $this->cadastro = $cadastro;
        }
        public function Cadastrar_Usuario(){
            $query = 
            'INSERT INTO cadastro (nome , dataNasc , rg , cpf , tel , sexo , email , senha , confirmSenha) 
            VALUES (:nome , :dataNasc , :rg , :cpf , :tel , :sexo , :email, :senha , :confirmSenha)';
            
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':nome', $this->cadastro->__get('nome'));
            $stmt->bindValue(':dataNasc', $this->cadastro->__get('dataNasc'));
            $stmt->bindValue(':rg', $this->cadastro->__get('rg'));
            $stmt->bindValue(':cpf', $this->cadastro->__get('cpf'));
            $stmt->bindValue(':tel', $this->cadastro->__get('tel'));
            $stmt->bindValue(':sexo', $this->cadastro->__get('sexo'));
            $stmt->bindValue(':email', $this->cadastro->__get('email'));
            $stmt->bindValue(':senha', $this->cadastro->__get('senha'));
            $stmt->bindValue(':confirmSenha', $this->cadastro->__get('confirmSenha'));
            
            $stmt->execute();
        }
    }
?>