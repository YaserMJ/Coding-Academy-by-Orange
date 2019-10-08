<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>PHP OOP CRUD</title>
 </head>
<?php
// ================================================ Object initiation ============================================================//

function __autoload($class){
 include_once($class.".php");
}
 $obj=new oopCrud;
// ================================================ Request handling =============================================================//

if(isset($_REQUEST['status'])){
 echo"Your Data Successfully Updated";
}

if(isset($_REQUEST['status_insert'])){
 echo"Your Data Successfully Inserted";
}

if(isset($_REQUEST['del_id'])){
if($obj->deleteData($_REQUEST['del_id'],"products")){

 echo"Your Data Successfully Deleted";
}
}
?>
<!-- ============================================Home & Insert buttons ============================================================ -->
<div>
 <div>
 <button><a href="show.php">Home</a></button>
 <button><a href="insert.php">Insert</a></button>
</div>
 <h3 >All The Data</h3>
 <table width="750" border="1">
 <tr>
 <th scope="col">Name</th>
 <th scope="col">Description</th>
 <th scope="col">Price</th>
 </tr>
 <!-- ======================================== Table generating via PHP ============================================================ -->

 <?php
 foreach($obj->showData("products") as $value){
 extract($value);
 echo <<<show
 <tr class="success">
 <td>$name</td>
 <td>$description</td>
 <td>$price</td>
 <td><button><a href="update.php?id=$id">Edit</a>
</button>&nbsp;&nbsp;<button><a href="show.php?del_id=$id">Delete</a></button></td>
 </tr>
show;
 }
 ?>
 <!-- ========================================================================================================================================= -->
 <tr>
 <th scope="col" colspan="5" align="right">
 <div>
 <button><a href="insert.php">Insert New Data</a></button>
 </div>
 </th>
 </tr>
 </table>
</div>
<body>
</body>
</html>
