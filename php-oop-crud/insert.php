<!DOCTYPE html>
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Insert</title>
 </head>
<body>
<!-- ============================================== PHP Object and request initiation ========================================================== -->
 <?php
function __autoload($class){
 include_once($class.".php");

}
 $obj=new oopCrud;
// ====================================================== Insert Request handling =================================================================
if(isset($_REQUEST['insert'])){
 extract($_REQUEST);
 if($obj->insertData($name,$description,$price,"products")){
 header("location:show.php?status_insert=success");
 }

}
// =============================================== PHP Insertion section generated via PHP ========================================================
echo @<<<show
<div>
 <div>
 <div>
 <button><a href="show.php">Home</a></button>
 </div>
 <h3>Insert Your Data</h3>
 <form action="insert.php" method="post">
 <table width="400" class="table-borderd">
 <tr>
 <th scope="row">Name</th>
 <td><input type="text" name="name" value="$name"></td>
 </tr>
 <tr>
 <th scope="row">description</th>
 <td><input type="text" name="description" value="$description"></td>
 </tr>
 <tr>
 <th scope="row">price</th>
 <td><input type="text" name="price" value="$price"></td>
 </tr>

 <tr>
 <th scope="row">&nbsp;</th>
 <td><input type="submit" name="insert" value="Insert" class="btn"></td>
 </tr>
 </table>
 </form>
</div>
show;
?>
</body>
</html>
