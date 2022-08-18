<?php

    class homeModel extends Mysql
    {
        public function __construct()
        {
           parent::__construct();
        }
        /*======================================
        Insertar un registro en la db
        ======================================*/
        public function setUser(string $nombre, int $edad)
        {
            $query_insert = "INSERT INTO usuario(nombre,edad) VALUES(?,?)";
            $arrData = array($nombre,$edad);
            $request_insert = $this->insert($query_insert,$arrData);
            return $request_insert;
        }
        /*=====================================
        Bucar un registro en la db
        =====================================*/
        public function getUser($id)
        {
            $sql = "SELECT * FROM usuario WHERE id = $id";
            $request = $this->select($sql);
            return $request;
        }
        /*=====================================
        Actualizar un registro en la db
        =====================================*/
        public function updateUser(int $id, string $nombre, int $edad)
        {
            $sql = "UPDATE usuario SET nombre = ?, edad = ? WHERE id = $id";
            $arrData = array($nombre, $edad);
            $request = $this->update($sql,$arrData);
            return $request;
        }
        /*====================================
        Ver la lista de usuarios completa
        ===================================*/
        public function getUsers()
        {
            $sql = "SELECT * FROM usuario";
            $request = $this->select_all($sql);
            return $request;
        }
        
        /*=================================
        Eliminar usuario
        =================================*/
        public function delUser($id)
        {
            $sql="DELETE FROM usuario WHERE id = $id";
            $request = $this->delete($sql);
            return $request;
        }
    }
?>