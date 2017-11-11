<html>
<body>
<style>
body{
background:#63b47a;
}
.i{ font-family: Arial, Helvetica, sans-serif; 
	 font-size: 20px;
	 color:#fff;
}
.btn {
  position:relative;
  width:10%;
  padding:10px;
  margin-left:60px;
  border-radius:6px;
  border:0;
  background:#f26964;
  font-size:1.2em;
  color:#fff;
  text-shadow:1px 1px 0px rgba(0,0,0,.1);
  box-shadow:0px 3px 0px #c1524e;
}
</style>
<form action="feedb.php">
<?php

$host = "localhost"; 
$user = "root";
$password = "";
$db = "feedback7";
$con = mysqli_connect($host,$user,$password,$db);
$s = 0;
if(isset($_POST['btn']))
{
 $id = $_POST['id'];
 $name = $_POST['name'];
 $year = $_POST['year'];
 $dep = $_POST['dep'];
 $password = $_POST['password'];
 $gender = $_POST['gender'];
 $result=mysqli_query($con,"SELECT * from users");
 while($row=mysqli_fetch_assoc($result))
 if($row["id"]==$id){
 echo "<div class='i'>User id not available </div>";
 $s = 1;}
}if($s==0){
 $sql_query = "INSERT INTO users(id,name,year,dep,password,gender) VALUES ('$id','$name','$year','$dep','$password','$gender')";
 mysqli_query($con, $sql_query);
 echo "<div class='i'>Student details inserted Successfully</div>";
 echo "<button type='submit' name='btn' class='btn'><strong>Login</strong></button>";
 } 

?>
</form>
</body>
</html>

