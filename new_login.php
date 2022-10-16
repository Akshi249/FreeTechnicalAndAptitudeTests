<!DOCTYPE html>
<html>
<head><title>login</title></head>
<style>
body{
background-image:url('nice.jpeg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
}
</style>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{ 
   $form=$_POST['f1'];
   if(!empty($_POST['em']))
    {
      if(!empty($_POST['pwd']))
       {
         $con=new mysqli("localhost","root","","free_test");
         if($con->connect_error)
         {
           die("connection to database failed".$con->connect_error);
         }
         $em=$_POST['em'];
         $name=$_POST['em'];
         $pwd=$_POST['pwd'];
         $sql="select email from signup where email='$em'";
         $res=$con->query($sql);
         if($res->num_rows==0){
           echo "<p style='text-align:center;font-style:bold;font-size:20px'>email is not registered with us</p>";
           echo "<p style='text-align:center;font-style:bold;font-size:20px'>please try creating new account</p>";
            switch($form)
           {
             case "id1":{$style1='style=display:block';include("aptitude.html");}break;
             case "id2":{$style2='style=display:block';include("cquiz.html");}break;
             case "id3":{$style3='style=display:block';include("javaquiz.html");}break;
             case "id4":{$style4='style=display:block';include("javascript_quiz.html");}break;
             case "id5":{$style5='style=display:block';include("mysqlquiz.html");}break;
           }
           exit();
          }
         else
          {
            $sql="select pwd from signup where pwd='$pwd'";
            $res=$con->query($sql);
            if($res->num_rows==0){
              echo "<p style='text-align:center;font-size:19px;font-style:bold'>wrong password</p>";
                 switch($form)
                 {
             case "id1":{$style1='style=display:block';include("aptitude.html");}break;
             case "id2":{$style2='style=display:block';include("cquiz.html");}break;
             case "id3":{$style3='style=display:block';include("javaquiz.html");}break;
             case "id4":{$style4='style=display:block';include("javascript_quiz.html");}break;
             case "id5":{$style5='style=display:block';include("mysqlquiz.html");}break;
                 }
              }
            else{
                 $name=$em;
                 $sql="insert into login(email,pwd) values('$em','$pwd')";
                 if(!$con->query($sql)){
                  die("ERROR: ".$con->error);
                   }
                  else{
                     
                     switch($form)
                     {
                     case "id1":{
                             //include("aptitude.html");
                           
                             echo "<div style='background-color:blue'>";
                             echo "<p style='display:inline;font-style:bold;font-size:20px'>logged in succesfully</p>"."<br>";
                             echo "<p style='display:inline;font-style:bold;font-size:20px'>Hello...$name</p>"."<br>";
                             $style1="style='display:none'";
                             echo "<div style='display:inline'><form action='profile.php' method='post'><input type='text' value=$name name='nm' style='display:none'><input type='submit' value='MY PROFILE'></form></div>"."<br>";;
                             echo "<form method='post' action='logout.php'><input type='text' value=$name name='nm' style='display:none'><input type='submit' value='LOG OUT' style='background-color:purple'></form>"."<br>";
                             echo "</div>"."<br>";
                             $st="style=display:block";
                             include("aptitude.html");
                            }
                           break;
                      case "id2":{
                             echo "<div style='background-color:blue'>";
                             echo "<p style='display:inline;font-style:bold;font-size:20px'>logged in succesfully</p>"."<br>";
                             echo "<p style='display:inline;font-style:bold;font-size:20px'>Hello...$name</p>"."<br>";
                             $style2="style='display:none'";
                             echo "<div style='display:inline'><form action='profile.php' method='post'><input type='text' value=$name name='nm' style='display:none'><input type='submit' value='MY PROFILE'></form></div>"."<br>";;
                             echo "<form method='post' action='logout.php'><input type='text' value=$name name='nm' style='display:none'><input type='submit' style='background-color:green' value='LOG OUT'></form>"."<br>";
                             echo "</div>"."<br>";
                             $st="style=display:block";
                             include("cquiz.html");
                           }
                           break;
                      case "id3":{
                             echo "<div style='background-color:blue'>";
                             echo "<p style='display:inline;font-style:bold;font-size:20px'>logged in succesfully</p>"."<br>";
                             echo "<p style='display:inline;font-style:bold;font-size:20px'>Hello...$name</p>"."<br>";
                             $style3="style='display:none'";
                             echo "<div style='display:inline'><form action='profile.php' method='post'><input type='text' value=$name name='nm' style='display:none'><input type='submit' value='MY PROFILE'></form></div>"."<br>";;
                             echo "<form method='post' action='logout.php'><input type='text' value=$name name='nm' style='display:none'><input type='submit' style='background-color:pink'  value='LOG OUT'></form>"."<br>";
                             echo "</div>"."<br>";
                             $st="style=display:block";
                             include("javaquiz.html");
                           }
                           break;
                   case "id4":{
                             echo "<div style='background-color:blue'>";
                             echo "<p style='display:inline;font-style:bold;font-size:20px'>logged in succesfully</p>"."<br>";
                             echo "<p style='display:inline;font-style:bold;font-size:20px'>Hello...$name</p>"."<br>";
                             $style4="style='display:none'";
                             echo "<div style='display:inline'><form action='profile.php' method='post'><input type='text' value=$name name='nm' style='display:none'><input type='submit' value='MY PROFILE'></form></div>"."<br>";;
                             echo "<form method='post' action='logout.php'><input type='text' value=$name name='nm' style='display:none'><input type='submit' style='background-color:yellow' value='LOG OUT'></form>"."<br>";
                             echo "</div>"."<br>";
                             $st="style=display:block";
                             include("javascript_quiz.html");
                           }
                           break;
                     case "id5":{
                             echo "<div style='background-color:blue'>";
                             echo "<p style='display:inline;font-style:bold;font-size:20px'>logged in succesfully</p>"."<br>";
                             echo "<p style='display:inline;font-style:bold;font-size:20px'>Hello...$name</p>"."<br>";
                             $style5="style='display:none'";
                             echo "<div style='display:inline'><form action='profile.php' method='post'><input type='text' value=$name name='nm' style='display:none'><input type='submit' value='MY PROFILE'></form></div>"."<br>";;
                             echo "<form method='post' action='logout.php'><input type='text' value=$name name='nm' style='display:none'><input type='submit' style='background-color:cyan' value='LOG OUT'></form>"."<br>";
                             echo "</div>"."<br>";
                             $st="style=display:block";
                             include("mysqlquiz.html");
                           }
                           break;
                        }
            /* if(($_POST['f1'])=="id1")
                include("aptitude.html");
             else if(($_POST['f2'])=="id2")
                include("cquiz.html");
             else if(($_POST['f3'])=="id3")
                include("javaquiz.html");
             else if(($_POST['f4'])=="id4")
               include("javascript_quiz.html");
             else if(($_POST['f5'])=="id5")
               include("mysqlquiz.html");*/
              exit();
             }
           }
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
$con->close();
}
?>
</body>
</html>