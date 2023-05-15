<?php 
    function prepareStatmentInsert ($arrayData,$table){
        foreach($arrayData as $key => $value){
            $sqlField[] = $key;
            $sqlValue[] = "'".$value."'";
        }
        $sqlField = implode(",",$sqlField);
        $sqlValue = implode(",",$sqlValue);
        return "INSERT INTO user ($sqlField) VALUES ($sqlValue)";
    }

    function prepareStatmentUpdate ($arrayData,$table,$id){
        foreach($arrayData as $key => $value){
            $sqlField[] = "$key = '$values'";
        }
        $sqlField = implode(",",$sqlField);
        return "UPDATE $table SET $sqlField WHERE id = $id";
    }
?>

