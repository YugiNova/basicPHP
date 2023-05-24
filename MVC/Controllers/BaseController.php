<?php 
    class BaseController {
        const VIEW_FOLDER = 'Views';
        const MODEL_FOLDER = 'Models';

        protected function view ($view,$data = []) {
            $view = str_replace('.','/',$view);

            foreach($data as $key => $value){
                $$key = $value;
            }

            return require './'.self::VIEW_FOLDER.'/'.$view.'.php';
        }

        protected function loadModel ($model){

            return require './'.self::MODEL_FOLDER.'/'.$model.'.php';
        }
    }
?>