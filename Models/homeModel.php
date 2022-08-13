<?php

    class homeModel
    {
        public function __construct()
        {
            //echo "Mensaje desde el modelo Home";
        }
        public function getCarrito($params)
        {
            return "Datos del carrito N°".$params;
            
        }
    }
?>