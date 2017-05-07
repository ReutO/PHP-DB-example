<?php

require_once "DAL.PHP";
function addAnimal($name,$description,$TypeID){
    $sql="insert into animals(name,description,typeID) values('$name','$description','$TypeID')";

    return insert($sql);

}

function updateAnimal($id,$name,$description,$TypeID){
  $updatesql= "UPDATE animals SET name='$name',`description`='$description',`typeid`='$TypeID' WHERE id='$id'";
return insert($updatesql);}


function deleteAnimal($id){
  $deletesql= "DELETE FROM animals WHERE id='$id'";
return insert($deletesql);}

function getAllAnimal(){
$sql="select id,name,description,typename from animals join types on animals.typeid=types.typeid";
$animals= getArray($sql);
return json_encode($animals);

}

function getAllTypes(){
$sql="select id,name,description,typename from animals join types on animals.typeid=types.typeid";
$animals= getArray($sql);
return json_encode($animals);

}
