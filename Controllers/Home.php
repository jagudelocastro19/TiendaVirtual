<?php
    class Home{
        public function __construct()
        {

        }

        public function home($parems)
        {
            echo "Mensaje desde el controlador";
        }

        public function datos($params)
        {
            echo "Datos recibidos: ".$params;
        }
    }
?>