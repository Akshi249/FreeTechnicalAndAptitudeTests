<!DOCTYPE html>
<html>
<head>
<title>updating query...</title>
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
  $isu=$_POST['isu'];
  $eml=$_POST['eml'];
  $con=new mysqli("localhost","root","","free_test");
  if($con->connect_error)
  {
    die("falied to connect to database".$con->connect_error);
  }
  else
  {
    $sql="update query set issolv=1 where qid=$isu";
    if($con->query($sql))
    {
     echo "<p style='margin-top:100px;font-size:20px;color:black;text-align:center;font-style:bold'>ISSUE SOLVED</p>";
     echo "<p style='font-size:20px;color:black;font-style:bold;text-align:center'>WANT TO NOTIFY USER ?</p>";
     echo "<p style='text-align:center'><a href='mailto:$eml' style='text-align:center;text-decoration:none;color:black;font-style:bold;font-size:20px'>NOTIFY USER</a></p>";
     $sql="delete from query where qid=$isu";
     if(!$con->query($sql))
      die("Error:".$con->error);
    }
    else
    {
      die("error has occurred".$con->error);
    }
  }
}
?>
</body>
</html>