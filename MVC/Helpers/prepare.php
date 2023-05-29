<?php 
    function prepareStatmentInsert ($table,$arrayData){
        foreach($arrayData as $key => $value){
            $sqlField[] = $key;
            $sqlValue[] = "'".$value."'";
        }
        $sqlField = implode(",",$sqlField);
        $sqlValue = implode(",",$sqlValue);
        echo "INSERT INTO $table ($sqlField) VALUES ($sqlValue)";
        return "INSERT INTO $table ($sqlField) VALUES ($sqlValue)";
    }

    function prepareStatmentUpdate ($arrayData,$table,$id){
        foreach($arrayData as $key => $value){
            $sqlField[] = "$key = '$values'";
        }
        $sqlField = implode(",",$sqlField);
        return "UPDATE $table SET $sqlField WHERE id = $id";
    }
?>

