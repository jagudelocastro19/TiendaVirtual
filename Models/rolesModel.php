<?php

    class RolesModel extends Mysql
    {
        public $intIdrol;
        public $strRol;
        public $strDescripcion;
        public $intStatus;

        public function __construct()
        {
           parent::__construct();
        }

        /*=========================
        Extrae Roles de la BD
        =========================*/
        public function selectRoles()
        {
            $sql = "SELECT * FROM tbl_rol WHERE status != 0";
            $request = $this->select_all($sql);
            return $request;
        }

        
        /*=========================
        Inserta Roles de la BD
        =========================*/

        public function insertRol(string $rol, string $descripcion, int $status){
            $return = "";
            $this->strRol = $rol;
            $this->strDescripcion = $descripcion;
            $this->intStatus = $status;

            $sql = "SELECT * FROM rol WHERE nombrerol = '{$this->strRol}' ";
            $request = $this->select_all($sql);

            if(empty($request))
            {
                $query_insert = "INSERT INTO rol(nombrerol,descripcion,status) VALUES(?,?,?)";
                $arrData = array($this->strRol, $this->strDescripcion, $this->intStatus);
                $request_insert = $this->insert($query_insert,$arrData);
                $return = $request_insert;
            }else{
                $return = "exist";
            }
            return $return;
        }

    }

?>