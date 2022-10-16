<!DOCTYPE html>
<head>
<title>
query login..
</title>
</head>
<body>
<div style="text-align:center;border:4px solid green;color:white;font-size:35px;background-color:blue;font-style:bold">
FREE TECHNICAL AND APTITUDE TESTS
</div>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(!empty($_POST['rem']))
  {
   if(!empty($_POST['pwd']))
   {
    $con=new mysqli("localhost","root","","free_test");
    if($con->connect_error)
    {
     die("connection failed".$con->connect_error);
    }
    else
     {
       $eml=$_POST['rem'];
       $pwrd=$_POST['pwd'];
       $sql="select email from signup where email='$eml'";
       if($con->query($sql))
       {
         $res=$con->query($sql);
         if($res->num_rows==0)
           die("email is not registered with us you cannot raise issues... as you dont have account on our website");
         else
          {
            $sql="select pwd from signup where pwd='$pwrd'";
            if($con->query($sql))
             {
               $res=$con->query($sql);
               if($res->num_rows==0)
                {
                  echo "wrong password.."."<br>";
                  echo "please try again"."<br>";
                  echo 'include("raisequery.html")';
                }
                else{
                    $email=$_POST['rem'];
                   // echo "HELLO....".$email."<br>";
                    include("raisequery.html");
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
         die("some error has occurred..".$con->error);
       }
     }
   }
   else
    {
    echo "password is required"."<br>";
    }
  }
  else
  {
   echo "enter the registered email it is must if you want to raise query means"."<br>";
   $con->close();
  }
 $con->close();
}
?>
</body>
</form>