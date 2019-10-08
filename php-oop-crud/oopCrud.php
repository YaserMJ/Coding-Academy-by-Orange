<?php

class oopCrud{
// =========================================== Conneciton Credintials ============================================================// 
 private $host="localhost";
 private $user="root";
 private $db="oopcrud";
 private $pass="";
 private $conn;
// ================================================ PDO Connection ===============================================================//
 public function __construct(){

 $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
 }
// =================================================== CRUD: READ ================================================================//
 public function showData($table){

 $sql="SELECT * FROM $table";
 $q = $this->conn->query($sql) or die("failed!");

 while($r = $q->fetch(PDO::FETCH_ASSOC)){
 $data[]=$r;
 }
 return $data;
 }

 public function getById($id,$table){

 $sql="SELECT * FROM $table WHERE id = :id";
 $q = $this->conn->prepare($sql);
 $q->execute(array(':id'=>$id));
 $data = $q->fetch(PDO::FETCH_ASSOC);
 return $data;
 }
// =================================================== CRUD: UPDATE ==============================================================//

 public function update($id,$name,$description,$price,$table){

$sql = "UPDATE $table
 SET name=:name,description=:description,price=:price
 WHERE id=:id";
 $q = $this->conn->prepare($sql);
 $q->execute(array(':id'=>$id,':name'=>$name,
':description'=>$description,':price'=>$price));
 return true;

 }
// =================================================== CRUD: CREATE ===============================================================//

 public function insertData($name,$description,$price,$table){

 $sql = "INSERT INTO $table SET name=:name,description=:description,price=:price";
 $q = $this->conn->prepare($sql);
 $q->execute(array(':name'=>$name,':description'=>$description,
':price'=>$price));
 return true;
 }
// =================================================== CRUD: DELETE ===============================================================//

 public function deleteData($id,$table){

 $sql="DELETE FROM $table WHERE id=:id";
 $q = $this->conn->prepare($sql);
 $q->execute(array(':id'=>$id));
 return true;
 }
}

?>
