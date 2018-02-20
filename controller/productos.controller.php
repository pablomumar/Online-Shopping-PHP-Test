<?php
require_once 'model/productos.php';

class productosController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new productos();
    }

    public function Index(){
        require_once 'view/list_products.php';
        require_once 'view/carro/cart.php';

    }

    public function Crud(){
        $producto = new productos();

        if(isset($_REQUEST['id'])){
            $producto = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/list_products.php';
        require_once 'view/carro/cart.php';

    }
}