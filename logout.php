<!DOCTYPE html>
<html>
<head>
<title>logout</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
   $con=new mysqli("localhost","root","","free_test");
   if($con->connect_error)
    {
      die("connection failed".$con->connect_error);
    }
   else
    {
      $name=$_POST['nm'];
      echo "email is: ".$name;
      $sql="delete from login where email='$name'";
     if($con->query($sql))
        {
           echo "you have been logged out succesfully"."<br>";
           $name="stupid";
           //echo "hello...".$name."<br>";
           include("take_test.html");
           exit();
        }
      else{
         die("some error has occurred".$con->error);
       }
    }
 }
?>
</body>
</html>
