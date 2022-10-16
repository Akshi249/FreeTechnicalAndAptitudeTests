<!DOCTYPE html>
<html>
<head>
<title>sign up</title>
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
   $x=0;
   $form=$_POST['f1'];
  if(!empty($_POST['fn']))
  {
    if(!empty($_POST['ln']))
    {
      if(!empty($_POST['em']))
      {
        if(!empty($_POST['pwd']))
         {
           $con=new mysqli("localhost","root","","free_test");
           if($con->connect_error)
           {
             die("connection failed".$con->connect_error);
           }
           $fn=$_POST['fn'];
           $ln=$_POST['ln'];
           $em=$_POST['em'];
           $pwd=$_POST['pwd'];
           $sql="select email,pwd from signup where email='$em' and pwd='$pwd'";
           $res=$con->query($sql);
           if($res->num_rows>0)
             {
                  $x=1;
                  echo "<p style='text-align:center;font-style:bold;font-size:20px'>$em is already registered with us</p>";
                  echo "<p style='text-align:center;font-style:bold;font-size:20px'>please try logging in</p>";
                  switch($form)
                   {
             case "id1":{$style1='style=display:block';include("aptitude.html");}break;
             case "id2":{$style2='style=display:block';include("cquiz.html");}break;
             case "id3":{$style3='style=display:block';include("javaquiz.html");}break;
             case "id4":{$style4='style=display:block';include("javascript_quiz.html");}break;
             case "id5":{$style5='style=display:block';include("mysqlquiz.html");}break;
                      }
                  $con->close();
                  exit();
             }
           $sql="insert into signup(email,first_name,last_name,pwd) values('$em','$fn','$ln','$pwd')";
           if($con->query($sql))
           {
             echo "account created succesfully"."<br>";
             include("take_test.html");
             $sql="insert into login(email,pwd) values('$em','$pwd')";
             if(!$con->query($sql))
             {
               die("some error has occurred".$con->error);
             }
             else{
                  $name=$_POST['em'];
                  $name=$name;
                  echo "hello...".$name."<br>";
                  
             }
           }
          else
           {
             echo "error in creating account".$con->error."<br>";
             include("take_test.html");
             exit();
           }
         }
         else
         {
           echo "password is required"."<br>";
           switch($form)
           {
             case "id1":{$style1='style=display:block';include("aptitude.html");}break;
             case "id2":{$style2='style=display:block';include("cquiz.html");}break;
             case "id3":{$style3='style=display:block';include("javaquiz.html");}break;
             case "id4":{$style4='style=display:block';include("javascript_quiz.html");}break;
             case "id5":{$style5='style=display:block';include("mysqlquiz.html");}break;
           }
         }
      }
      else
       {
         echo "email is required"."<br>";
         switch($form)
           {
             case "id1":{$style1='style=display:block';include("aptitude.html");}break;
             case "id2":{$style2='style=display:block';include("cquiz.html");}break;
             case "id3":{$style3='style=display:block';include("javaquiz.html");}break;
             case "id4":{$style4='style=display:block';include("javascript_quiz.html");}break;
             case "id5":{$style5='style=display:block';include("mysqlquiz.html");}break;
           }
       }
    }
    else
     {
       echo "last name is required"."<br>";
       switch($form)
           {
             case "id1":{$style1='style=display:block';include("aptitude.html");}break;
             case "id2":{$style2='style=display:block';include("cquiz.html");}break;
             case "id3":{$style3='style=display:block';include("javaquiz.html");}break;
             case "id4":{$style4='style=display:block';include("javascript_quiz.html");}break;
             case "id5":{$style5='style=display:block';include("mysqlquiz.html");}break;
           }
     }
  }
  else
  {
   echo "first name is required"."<br>";
    switch($form)
           {
             case "id1":{$style1='style=display:block';include("aptitude.html");}break;
             case "id2":{$style2='style=display:block';include("cquiz.html");}break;
             case "id3":{$style3='style=display:block';include("javaquiz.html");}break;
             case "id4":{$style4='style=display:block';include("javascript_quiz.html");}break;
             case "id5":{$style5='style=display:block';include("mysqlquiz.html");}break;
           }
  }
$con->close();
}
?>
</body>
</html>