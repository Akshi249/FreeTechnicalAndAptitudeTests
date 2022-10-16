<!DOCTYPE html>
<html>
<head>
<title>forgot password</title>
<style>
body{
background-image:url('nice.jpeg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
}
</style>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
 if(!empty($_POST['eml']))
 {
   if(!empty($_POST['pwd']))
   {
     $eml=$_POST['eml'];
     $pwd=$_POST['pwd'];
     $con=new mysqli("localhost","root","","free_test");
     if($con->connect_error)
      {
        die("unable to connect to database".$con->connect_error);
      }
     else
      {
        $sql="update signup set pwd='$pwd' where email='$eml'";
        if($con->query($sql))
        {
          echo "password updated succesfully";
          include("take_test.html");
        }
        else
        {
         die("error has occurred".$con->error);
        }
       $con->close();
      }
   }
   else
   {
     echo "password is required";
     include("setpassword.html");
     exit();
   }
 }
 else
 {
  echo "registered email required";
  include("setpassword.html");
  exit();
 }
}
?>
</body>
</html>