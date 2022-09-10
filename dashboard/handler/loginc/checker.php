<?php

if($_SERVER['REQUEST_METHOD'] == "POST" and $_REQUEST['data'] == "Send_Me_Data"){

    if(file_exists("file-names.json")){
        $get_file_data = file_get_contents("file-names.json");

        $get_file_name = json_decode($get_file_data,TRUE);
        
    
        if(file_exists($get_file_name['name'])){
    
            echo file_get_contents($get_file_name['name']);
    
         }else{
            echo "Data isn't Exist :/";
        }

    }else{
        echo "ssss";
    }
    

}else{

    header("HTTP/1.1 404 Not Found");
}   


?>