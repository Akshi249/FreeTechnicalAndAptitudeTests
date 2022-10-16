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
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(!empty($_POST['eml']))
  {
    $con=new mysqli("localhost","root","","free_test");
    if($con->connect_error)
    {
      die("unable to connect to database".$con->connect_error);
    }
    else
    {
      $eml=$_POST['eml'];
      $sql="select pwd from signup where email='$eml'";
      if($con->query($sql))
      {
        $res=$con->query($sql);
        if(($row=$res->fetch_assoc())==0)
        {
          echo "<p>email you entered is not registered with us</p>";
          echo "<p>please try creating new account</p>";
          include("take_test.html");
          $con->close();
          exit();
        }
        else
        {
           include("setpassword.html");
           $con->close();
           exit();
        }
      }
      else
      {
       die("some error has occurred".$con->error);
      }
    }
  }
  else
  {
    echo "<p>please enter the registered email";
    include("forgot.html");
    exit();
  }
}
?>
</body>
</html>