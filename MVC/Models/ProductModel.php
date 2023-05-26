<?php 
    class ProductModel extends BaseModel{
        const TABLE = 'product';

        public function getNoteList() {
            $data = $this->all(self::TABLE);

            return $data;
        }

        public function getProductList() {
            return [
                ['id' => 1, 'name' => 'Iphone 12'],
                ['id' => 2, 'name' => 'Iphone 13'],
                ['id' => 3, 'name' => 'Iphone 14'],
            ];

            return $productsList;
        }

        public function getProductHot() {
            return [
                ['id' => 3, 'name' => 'Iphone 3'],
                ['id' => 4, 'name' => 'Iphone 4'],
                ['id' => 5, 'name' => 'Iphone 5'],
            ];
        }
    }
?>