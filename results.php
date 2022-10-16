<!DOCTYPE html>
<html>
<head>
<title>last week results</title>
<style>
.ir{
font-size:25px;
background-color:grey;
padding:5px;
font-style:bold;
margin:5px;
}
.or{
background-color:pink;
font-size:25px;
font-style:bold;
padding:5px;
margin:5px;
}
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
  $con=new mysqli("localhost","root","","free_test");
  if($con->connect_error)
   {
     die("ERROR:".$con->connect_error);
   }
  else
   {
     $sql="select max(score) as 'scr',test_name,test_date from test_taken  group by test_name";
     if($con->query($sql))
      {
         $res=$con->query($sql);
         if($res->num_rows==0)
          {
             echo "<h1 style='text-align:enter;color:blue;font-style:bold;margin-top:100px'>NO USER HAS TAKEN TEST IN THE LAST WEEK</h1>";
             include("take_test.html");
             exit();
          }
         echo "<table style='border:3px solid black;margin-left:auto;margin-right:auto' class='t'>";
               echo "<tr class='or'>";
               echo "<th style='padding:5px' >TEST NAME</th>";
               echo "<th style='padding:5px'>MAXIMUM SCORE</th>";
               echo "<th style='padding:5px'>USER</th>";
               echo "</tr>";
         while($row=$res->fetch_assoc())
         {
           $v1=$row['test_name'];
           $v2=$row['scr'];
           $sql="select email from test_taken where score=$v2 and test_name='$v1'";
           if(!$con->query($sql))
             die("ERROR IN FETCHING THE DATA :".$con->error);
           $r1=$con->query($sql);
           while($r2=$r1->fetch_assoc())
            {
              $v3=$r2['email'];
              break;
            }
           echo "<tr class='ir'>";
           echo "<td>$v1</td>";
           echo "<td>$v2</td>";
           echo "<td>$v3</td>";
           echo "</tr>";
         }
          echo "</table>";
      }
     else
     {
        die("ERROR: ".$con->error);
     }
   }
}
?>
</body>
</html>