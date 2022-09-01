<?php

    class rolesModel extends Mysql
    {
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

    }

?>