<?php
    class Conexao {  
        private $host = 'localhost';
        private $dbname = 'loja';
        private $user = 'isabela';
        private $pass = 'bsC/!ZEzO9[AxffY';
        
        public function conectar() {
            try {
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"				
                );
                return $conexao;
            } catch (PDOException $e) {
                echo '<p>'.$e->getMessage().'</p>';
            }
        }
    }
    
?>