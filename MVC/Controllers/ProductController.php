<?php 
    class ProductController extends BaseController{
        private $productModel;

        public function __construct () {
            $this->loadModel("ProductModel");
            $this->productModel = new ProductModel;
        }

        public function index (){
            $data = [
                'productList' => $this->productModel->getProductList(),
                'productHot' => $this->productModel->getProductHot(),
                'headingList' => "Product List",
                'headingHot' => 'Product Hot'
            ];

            return $this->view('product.list_product',$data);
        }

        public function create () {
            return $this->view('product.create_product') ;
        }
    }
?>