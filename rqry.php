<!DOCTYPE html>
<html>
<head>
<title>raising query..</title>
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
<div style="text-align:center;border:4px solid green;color:white;font-size:35px;background-color:blue;font-style:bold">
FREE TECHNICAL AND APTITUDE TESTS
</div>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
 if(!empty($_POST['qre']))
 {
  if(!empty($_POST['qdt']))
  {
   if(!empty($_POST['issue']))
   {
    $reml=$_POST['em'];
    $qrem=$_POST['qre'];
    $qrdate=$_POST['qdt'];
    $qr=$_POST['issue'];
    if($reml==$qrem)
    {
     $con=new mysqli("localhost","root","","free_test");
     if($con->connect_error)
      {
        die("econnection failed..".$con->connect_error);
      }
      else
      {
        $sql="insert into query(qdate,email,issue) values('$qrdate','$qrem','$qr')";
        if($con->query($sql))
        {
          echo "<h3 style='margin:120px;display:inline;text-align:center;font-size:20px;font-style:bold;color:blue'>
                <p>Hey $reml....!!!!!!!!</p>
                <p>Thank You for letting us the issue,that you are facing with our website</p>
                <p>At the same we are very sorry about the issue that has been caused,will do our best to resolve your issue.</p>
                <p>Keep Preparing for placements by taking free tests on our website....</p>
                <p style='font-size:30px'>THANK YOU...!!!!!!!</p>
                </h3>";
        }
        else
        {
         die("ERROR: ".$con->error);
        }
      }
    }
    else
    {
     echo "<h3>the email which u are using to raise the issue is not rigistered with us..</h3>"."<br>";
     echo "<h3>please use the same which u used while creating ur account on this website to raise the issue</h3>"."<br>";
     echo "<h3>registered email:</h3>".$remal."<br>";
     echo "<h3>query raising email..</h3>".$qreml."<br>";
    }
   }
   else
   {
    die("please tell us the problem that u are facing with our website");
   }
  }
  else
  {
   die("date of raising query is required");
  }
 }
 else
 {
   die("email is required");
 }
}
?>
</body>
</html>