<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "parkit";

$conn = mysqli_connect($servername, $username, $password, $database);


if ($conn) {
     echo "";
 }

 else{die("Connection failed: ".mysqli_connect_error());


} 

 error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="sl.css">
  <script>
function myFunction() {
  alert("Slot Booked!");
}
</script>

</head>
<body>
  <form method="GET">
<table class="table">
  <tr>
    <td > <input name="btn1" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="1" onclick="myFunction()"/> </td>
    <td> <input name="btn2" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="2" onclick="myFunction()"/> </td>
    <td> <input name="btn3" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="3" onclick="myFunction()"/> </td>
    <td> <input name="btn4" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="4" onclick="myFunction()"/> </td>
    <td> <input name="btn5" type="submit"  style="background-color:green; width:100px; height:150px; font-size : 40px" value="5" onclick="myFunction()"/></td>
    <td><input name="btn6" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="6" onclick="myFunction()"/> </td>
  </tr>
  <tr>
    <td > <input name="btn7" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="7" onclick="myFunction()"/> </td>
    <td> <input name="btn8" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="8" onclick="myFunction()"/> </td>
    <td><input name="btn9" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="9"onclick="myFunction()" </td>
    <td> <input name="btn10" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="10" onclick="myFunction()" /> </td>
    <td> <input name="btn11" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="11" onclick="myFunction()"/> </td>
    <td> <input name="btn12" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="12" onclick="myFunction()"/> </td>
  </tr>
  <tr>
    <td > <input name="btn13" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="13" onclick="myFunction()"/> </td>
    <td> <input name="btn14" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="14" onclick="myFunction()"/> </td>
    <td> <input name="btn15" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="15" onclick="myFunction()"/> </td>
    <td> <input name="btn16" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="16" onclick="myFunction()"/> </td>
    <td> <input name="btn17" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="17" onclick="myFunction()"/> </td>
    <td><input name="btn18" type="submit" style="background-color:green; width:100px; height:150px; font-size : 40px" value="18" onclick="myFunction()"/> </td>
  </tr>  
</tbody>
</table>
 </form>
<?php   
 if($_GET['btn1'])
 {
     $query = "INSERT INTO parkit VALUES ('1','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

if($_GET['btn2'])
 {
     $query = "INSERT INTO parkit VALUES ('2','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

 if($_GET['btn3'])
 {
     $query = "INSERT INTO parkit VALUES ('3','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

 if($_GET['btn4'])
 {
     $query = "INSERT INTO parkit VALUES ('4','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

 if($_GET['btn5'])
 {
     $query = "INSERT INTO parkit VALUES ('5','yes')";
         $data= mysqli_query($conn,$query);
 }

   if($_GET['btn6'])
 {
     $query = "INSERT INTO parkit VALUES ('6','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

   if($_GET['btn7'])
 {
     $query = "INSERT INTO parkit VALUES ('7','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

 if($_GET['btn8'])
 {
     $query = "INSERT INTO parkit VALUES ('8','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

 if($_GET['btn9'])
 {
     $query = "INSERT INTO parkit VALUES ('9','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

 if($_GET['btn10'])
 {
     $query = "INSERT INTO parkit VALUES ('10','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

 if($_GET['btn11'])
 {
     $query = "INSERT INTO parkit VALUES ('11','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }
 

 if($_GET['btn12'])
 {
     $query = "INSERT INTO parkit VALUES ('12','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

 if($_GET['btn13'])
 {
     $query = "INSERT INTO parkit VALUES ('13','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

 if($_GET['btn14'])
 {
     $query = "INSERT INTO parkit VALUES ('14','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

 if($_GET['btn15'])
 {
     $query = "INSERT INTO parkit VALUES ('15','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

 if($_GET['btn16'])
 {
     $query = "INSERT INTO parkit VALUES ('16','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

 if($_GET['btn17'])
 {
     $query = "INSERT INTO parkit VALUES ('17','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

 if($_GET['btn18'])
 {
     $query = "INSERT INTO parkit VALUES ('18','yes')";
         $data= mysqli_query($conn,$query);
   
 
 }

?>
</body>
</html>