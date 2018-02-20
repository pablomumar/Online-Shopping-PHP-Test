<?php
/**
 * Created by PhpStorm.
 * User: CheiZz
 * Date: 19/02/2018
 * Time: 8:44
 */

class productos
{
    public $pdo;

    public $id;
    public $product_code;
    public $product_name;
    public $product_desc;
    public $product_img_name;
    public $price;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Database::StartUp();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM productos");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try
        {
            $stm = $this->pdo
                ->prepare("SELECT * FROM productos WHERE id = ?");


            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try
        {
            $stm = $this->pdo
                ->prepare("DELETE FROM productos WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}


