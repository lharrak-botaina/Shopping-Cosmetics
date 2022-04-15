<?php
include "cartLine.php";
include "product.php";


class Gestion {
    public $name ;
    private $Connection = Null;
    private function getConnection(){
            $this->Connection = mysqli_connect('localhost', 'superuser', 'p@ssword1', 'productiondb');
        return $this->Connection;
    }


    public function getCartLine(){
        $sql = "SELECT * ,SUM(Product_cart_quantity) FROM cartline INNER JOIN products on products.id=cartline.Id_product GROUP BY Id_Product ";
        $query = mysqli_query($this->getConnection(), $sql);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        // 
        $cartLineList = array();
        foreach($result as $value){
            $product = new Product();
            $cartLine = new CartLine();
            $cartLine->setIdCartLine($value['id']);
            $cartLine->setIdCart($value['Id_cart']);
            $cartLine->setIdProduct($value['Id_product']);
            $cartLine->setProductCartQuantity($value['SUM(Product_cart_quantity)']);
            $cartLine->setProduct($value['Name']);
            array_push($cartLineList, $cartLine);
        }
        return $cartLineList;
    }
}
