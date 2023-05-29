<?php 
    function dd($obj) {
        echo '<pre>'.var_dump($obj); die;
    }

    function showError($errors,$input){
        $string = '';
        if(isset($errors[$input])){
            foreach($errors[$input] as $error){
                $string .= "<br><p style='color:red'>$error</p><br>";
            }
        }
        return $string;
    }
?>