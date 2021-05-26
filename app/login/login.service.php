<?php

    class login_Service{
        private $conexao;
        private $login;

        public function __construct(Conexao $conexao, Login $login) {
            $this->conexao = $conexao->conectar();
            $this->login = $login;
        }
        public function Realizar_Login(){
            $query = 'SELECT * FROM cadastro WHERE email = :email  AND senha = :senha';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':email', $this->login->__get('email'));
            $stmt->bindValue(':senha', $this->login->__get('senha'));
        
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $retorno = $stmt->fetch();
                $_SESSION['usuario'] = $retorno['id'];
                
                return true;
            }else{
                return false;
            }

        }

    }

?>