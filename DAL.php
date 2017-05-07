<?php

function connect(){
    
  $conn = mysqli_connect("localhost", "root", "", "zoo");
  
  mysqli_set_charset($conn,"utf8");
  
   if(mysqli_connect_errno($conn)){
       die("faild to connect to the data base error:".mysqli_error());
   }
   return $conn;
}

function insert($sql){
    $conn= connect();
    mysqli_query($conn, $sql);
   $insertID= mysqli_insert_id($conn);
   mysqli_close($conn);
   return $insertID;
}

function update($updatesql){
    $conn= connect();
    mysqli_query($conn, $updatesql);
   $insertID= mysqli_insert_id($conn);
   mysqli_close($conn);
   return $insertID;
}

function delete($deletesql){
    $conn= connect();
    mysqli_query($conn, $deletesql);
   $insertID= mysqli_insert_id($conn);
   mysqli_close($conn);
   return $insertID;
}


function getarray($sql){
    $conn= connect();
    $arr=array();
    $result= mysqli_query($conn, $sql);
   $obj= mysqli_fetch_object($result);
   while($obj){
       $arr[]=$obj;
       $obj= mysqli_fetch_object($result);
   }
   mysqli_close($conn);
   return $arr;
}