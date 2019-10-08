<!DOCTYPE >
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Edit</title>
 </head>
<body>
<!-- ============================================== PHP Object and request initiation ========================================================== -->
<?php
function __autoload($class){
 include_once($class.".php");

}
 $obj=new oopCrud;
// ====================================================== Update Request handling =================================================================

if(isset($_REQUEST['update'])){
 extract($_REQUEST);
 if($obj->update($id,$name,$description,$price,"products")){
 header("location:show.php?status=success");
 }

}
// =================================================================================================================================================
extract($obj->getById($_REQUEST['id'],"products"));
echo <<<show
<div>
 <div>
 <button><a href="show.php">Home</a></button>
 </div>
 <h3>Edit Your Data</h3>
 <form action="update.php" method="post">
 <table width="500" border="1">
 <tr>
 <th scope="row">Id</th>
 <td><input type="text" name="id" value="$id" readonly="readonly"></td>
 </tr>
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
 <tr>
 <th scope="row">&nbsp;</th>
 <td><input type="submit" name="update" value="Update" class="btn"></td>
 </tr>
 </table>
 </form>
</div>
show;
?>

</body>
</html>
