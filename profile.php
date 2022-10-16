<!DOCTYPE html>
<html>
<head>
<title>my profile</title>
<style>
.ir:hover{
background-color:blue;
font-size:30px;
padding:5px;
font-style:bold;
margin:5px;
}
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
<div style="text-align:center;border:4px solid green;color:white;font-size:35px;background-color:blue;font-style:bold">
FREE TECHNICAL AND APTITUDE TESTS
</div>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $con=new mysqli("localhost","root","","free_test");
  if($con->connect_error)
   {
     die("connection failed".$con->connect_error." ");
   }
   else
   {
     $name=$_POST['nm'];
     $sql="select * from test_taken where email='$name' ";
     $res=$con->query($sql);
     if($res)
     {
       if($res->num_rows>0){
             echo "<table style='border:3px solid black;text-align:center' class='t'>";
             echo "<tr class='or'>";
             echo "<th style='padding:5px'>NAME OF TEST TAKEN</th>";
             echo "<th style='padding:5px'>DATE OF TEST TAKEN</th>";
             echo "<th style='padding:5px'>MARKS SCORED</th>";
             echo "<th style='padding:5px'>EMAIL ID</th>";
             echo "</tr>";
           while($row=$res->fetch_assoc()){
                 $v1=$row['test_name'];
                 $v2=$row['test_date'];
                 $v3=$row['score'];
                 $v4=$row['email'];
                 echo "<tr class='ir'>";
                 echo "<td>$v1</td>";
                 echo "<td>$v2</td>";
                 echo "<td>$v3</td>";
                 echo "<td>$v4</td>";
                 echo "</tr>";
            }
            echo "</table>";
           }
        else{
         echo "no data found"."<br>";
          exit();
        }
     }
   else{
     die("error has occurred".$res->error);
    }
  }
}
?>
</body>
</html>