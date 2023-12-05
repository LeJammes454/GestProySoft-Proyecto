<?php
    class Usuario{
        public $nombreCompleto="";
        public $edad=0;
        public $correo="";
        public $password="";

        public function __construct(){
            $this->fechaNac=new DateTime();
        }
    }
?>