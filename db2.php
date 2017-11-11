<html>
<body>
<style>
body {
  background:#63b47a;
}
input {
  wuserth:20%;
  background:#f5f5f5;
  border:0;
  padding:10px;
  border-radius:6px;
  margin-bottom:10px;
  border:1px soluser #eee;
   left: 400px;
   position:absolute;
    border: 3px soluser #73AD21;
}
form {
  background:#fff;
  border-radius:7px;
    padding:20px;
	 wuserth:900px;
	 margin:50px auto;
  box-shadow:20px 20px 0px rgba(0,0,0,.1);
  height:400px;
}
p{
	font-family:Magneto Bold;
}
.k{
	 font-family: Arial, Helvetica, sans-serif; 
	 font-size: 20px;
	 color:#f26964;
}

input[type="text"]{
	font-size: 20px;
}
.j{
	position:relative;
  wuserth:10%;
  padding:10px;
  border-radius:6px;
  margin-left:-150px;
  border:0;
  background:#f26964;
  font-size:1.2em;
  color:#fff;
  text-shadow:1px 1px 0px rgba(0,0,0,.1);
  box-shadow:0px 3px 0px #c1524e;
}
.i{ font-family: Arial, Helvetica, sans-serif; 
	 font-size: 20px;
	 color:#f26964;
}
</style>
<form action="a.html">
<?php
$conn=mysqli_connect("localhost","root","","feedback7");
if(!$conn){
die("connection failed:".mysqli_connect_error());
}
$a=0;
if(isset($_POST["Login"])){
$user = $_POST['user'];
$pass = $_POST['pass'];
}
$user=stripcslashes($user);
$pass=stripcslashes($pass);
$username=mysqli_real_escape_string($conn,$user);
$pass=mysqli_real_escape_string($conn,$pass);
mysqli_select_db($conn,"feedback7 ");
$result=mysqli_query($conn,"SELECT * from users");
while($row=mysqli_fetch_assoc($result)){
if($row["name"]== $user && $row["password"] == $pass){
$result1=mysqli_query($conn,"SELECT * from users where name='$user'");
$row1=mysqli_fetch_assoc($result1);
$b=$row1["name"];
echo "<div class='i'>Welcome $b !!! </div>";print "<br/>";
$e=$row1["name"];
echo "<div class='k'>user:<input readonly='readonly' type='text' value='$e'/></div>";
print "<br/>";
print "<br/>";
echo "<div class='k'>Name:<input readonly='readonly' type='text' value='$b'/></div>"; 
print "<br/>";
print "<br/>";
$c=$row1["year"];
echo "<div class='k'>Year<input readonly='readonly' type='text' value='$c'/></div>"; 
print "<br/>";
print "<br/>";
$d=$row1["dep"];
echo "<div class='k'>Department:<input readonly='readonly' type='text' value='$d'/></div>"; 
print "<br/>";
print "<br/>";
$p=$row1["gender"];
echo "<div class='k'>Gender:<input readonly='readonly' type='text' value='$p'/></div>"; 
print "<br/>";
print "<br/>";
print "<br/>";
echo "<div >AlREADY ENTERED FEEDBACK</div>";
echo "<input class='j' type='login' value='Logout'>";
 $a = 1;
break;
}
}
if($a==0) echo "<div class='i'>Login Failed!!!  GO AND REGISTER</div>";

?> 

</form>
</body>
</html>