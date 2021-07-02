<?php
    class dataBase{
        private $host;
        private $db;
        private $usuario;
        private $password;
        private $charset;
        public function __construct(){
            $this->host='';
            $this->db='mbh';
            $this->usuario='root';
            $this->password = '';
            $this->charset = 'utf8mb4';
        }
        function connect(){
            try{
                $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                
                $pdo = new PDO($connection, $this->user, $this->password, $options);
        
                return $pdo;
            }catch(PDOException $e){
                print_r('Error connection: ' . $e->getMessage());
            }
        }
    }

  
?>