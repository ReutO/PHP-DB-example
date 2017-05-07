<?php

require_once 'businessLogic.php';
$command=$_REQUEST["command"];

switch ($command){
    case "insert":
        $name = $_POST["name"];
        $description = $_POST["description"];
        $TypeID = $_POST["typeID"];
        
        addAnimal($name, $description, $TypeID);
        echo "Name:$name, Description: $description, TypeID:$TypeID";
        header("location:thenkYou.php");
        break;
    case "update":
       
        
        $name = $_POST["name"];
        $description = $_POST["description"];
        $TypeID = $_POST["typeID"];
        $id = $_POST["id"];
        updateAnimal($id,$name, $description, $TypeID);
        echo "Update Name:$name, Description: $description, TypeID:$TypeID";
        header("location:thankYou.html");
        break;
        case "delete":
       
        $id = $_POST["id"];
        deleteAnimal($id);
        echo "delete id: $id";
        break;
    
        case "selectAll":
            echo getAllAnimal();
        break;
    
}