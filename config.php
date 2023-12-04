<?php
    class Database
    {
        private $servername = "localhost";
        private $username = "root";
        private $password = "root";
        private $dbname = "Restaurante";
        private $conn;
        public function __construct()
        {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    
            if ($this->conn->connect_error) {
                die("Conexión fallida: " . $this->conn->connect_error);
            } else {
                echo "Conexión exitosa";
            }
        }
    
        public function query($sql)
        {
            $result = $this->conn->query($sql);
    
            $data = array();
    
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
    
            return $data;
        }
    
        public function closeConnection()
        {
            $this->conn->close();
        }
    }
    ?>