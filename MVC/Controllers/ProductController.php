<?php 
    class ProductController extends BaseController{
        public function index (){
            return $this->view('product.list_product');
        }

        public function create () {
            return $this->view('product.create_product') ;
        }
    }
?>