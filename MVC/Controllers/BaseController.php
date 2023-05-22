<?php 
    class BaseController {
        const VIEW_FOLDER = 'Views';

        protected function view ($view) {
            $view = str_replace('.','/',$view);
            return require './'.self::VIEW_FOLDER.'/'.$view.'.php';
        }
    }
?>