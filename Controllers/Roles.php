<?php
    class Roles extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function Roles()
        {
            $data['page_id'] = 3;
            $data['page_tag'] = "Roles Usuario";
            $data['page_name'] = "rol_usuario";
            $data['page_title'] = " Roles Usuario <small> Tienda virtual </small>";
            $this->views->getView($this,"roles",$data);
        }

        public function getRoles()
        {
            $arrData = $this->model->selectRoles();

            for ($i=0; $i < count($arrData); $i++){
                if($arrData[$i]['status']==1)
                {
                    $arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
                }
                else{
                    $arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
                }

                $arrData[$i]['options'] = "";
            }

            echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
            die();
        }

    }
?>