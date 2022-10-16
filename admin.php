<!DOCTYPE html>
<html>
<head>
<title>admin login</title>
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
<body >
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(!empty($_POST['urnm']))
  {
   if(!empty($_POST['pwrd']))
    {
      $admin=$_POST['urnm'];
      $pwrd=$_POST['pwrd'];
      if($admin=="admin")
      {
        if($pwrd=="admin@249")
        {
         // echo "<pre style='background-color:blue;margin-top:600px;display:inline;color:white;font-size:20px;font-style:bold;border:2px solid black;text-align:center'>WELCOME ADMIN</pre>"."<br>"; 
          $con=new mysqli("localhost","root","","free_test");
          if($con->connect_error)
          {
            die("connection to database failed".$con->connect_error);
          }
          else
          {
           $sql="insert into admin(username,paswrd) values('$admin','$pwrd')";
           if($con->query($sql))
           {
             $sql="select count(*) as 'total' from signup";
             if($con->query($sql))
             {
               $res=$con->query($sql);
               while($row=$res->fetch_assoc()){
               $v1=$row['total'];
               echo "<div style='color:black;margin-top:90px;font-size:30px;font-style:bold;text-align:center;'>
                     <p>NUMBER OF USERS :  <span> $v1</span> </p>
                  </div>";
               }
             }
             else 
             {
               die("error has occurred".$con->error);
             }
             
             $sql="select count(issue) as 'issues' from query";
             if($con->query($sql))
             {
               $res=$con->query($sql);
               while($row=$res->fetch_assoc()){
               $v1=$row['issues'];
               echo "<div style='color:black;font-size:30px;font-style:bold;text-align:center;'>
                     <p>TOTAL QUERIES RISED :  <span> $v1</span> </p>
                  </div>";
               }
             }
             else 
             {
               die("error has occurred".$con->error);
             }
             $sql="select count(test_name) as 'tt' from test_taken";
             if($con->query($sql))
             {
               $res=$con->query($sql);
               while($row=$res->fetch_assoc()){
               $v1=$row['tt'];
               echo "<div style='color:black;font-size:30px;font-style:bold;text-align:center'>
                     <p>TOTAL TESTS TAKEN TILL TODAY :  <span> $v1</span></p>
                  </div>";
               }
             }
             else 
             {
               die("error has occurred".$con->error);
             }
             echo "<p style='display:block;text-align:center'><div style='font-size:25px;display:inline;font-style:bold;text-align:center;background-color:blue;color:white;border:2px solid black;margin-top:40px'>QUERIES RISED</div></p>";
             $sql="select * from query where issolv=0";
             if($con->query($sql))
              {
               $res=$con->query($sql);
                
               echo "<table style='border:3px solid black;margin-left:auto;margin-right:auto' class='t'>";
               echo "<tr class='or'>";
               echo "<th style='padding:5px' >DATE OF QUERY RISED</th>";
               echo "<th style='padding:5px'>USER EMAIL</th>";
               echo "<th style='padding:5px'>QUERY RISED</th>";
               echo "<th style='padding:5px'>UPDATE</th>";
               echo "</tr>";
               if($res->num_rows==0)
                  {
                    echo "<tr class='ir'>";
                    echo "<td>no data available</td>";
                    echo "<td>no data available</td>";
                    echo "<td>no data available</td>";
                    echo "<td>no data available</td>";
                    echo "</tr>";
                  }
               while($row=$res->fetch_assoc())
               {
                  $v1=$row['qdate'];
                  $v2=$row['email'];
                  $v3=$row['issue'];
                  $v4=$row['qid'];
                  echo "<tr class='ir'>";
                  echo "<td>$v1</td>";
                  echo "<td>$v2</td>";
                  echo "<td>$v3</td>";
                  echo "<td><form action='updateqry.php' method='post'><input type='text' value=$v2 name='eml' style='display:none'><input type='text' value=$v4 name='isu' style='display:none'><input type='submit' value='Update Query'></form></td>";
                  echo "</tr>";
               }
               echo "</table>";
              }
             else{
                die("error has occurred".$con->error);
             }
            echo "<p style='display:block;text-align:center'><div style='font-size:25px;font-style:bold;display:inline;text-align:center;background-color:blue;color:white;border:2px solid black;'>USERS DETAILS</div></p>";
            $sql="select * from signup";
            if($con->query($sql))
            {
             $res=$con->query($sql);
             if($res->num_rows==0)
              die("no date found");
             echo "<table style='border:3px solid black;margin-left:auto;margin-right:auto' class='t'>";
             echo "<tr class='or'>";
             echo "<th>EMAIL</th>";
             echo "<th>FIRST NAME</th>";
             echo "<th>LAST NAME</th>";
             echo "</tr>";
             while($row=$res->fetch_assoc())
             {
                $v1=$row['email'];
                $v2=$row['first_name'];
                $v3=$row['last_name'];
                echo "<tr class='ir'>";
                echo "<td>$v1</td>";
                echo "<td>$v2</td>";
                echo "<td>$v3</td>";
                echo "</tr>";
             }
             echo "</table>";
            }
            else{
             die("error has occurred".$con->error);
            }
           echo "<p style='display:block;text-align:center'><div style='font-size:25px;font-style:bold;display:inline;text-align:center;background-color:blue;color:white;border:2px solid black;'>TEST DETAILS</div></p>";
           $sql="select test_name,email,test_date from test_taken";
            if($con->query($sql))
            {
              $res=$con->query($sql);
              echo "<table style='border:3px solid black;margin-left:auto;margin-right:auto' class='t'>";
              echo "<tr class='or'>";
              echo "<th>TEST NAME</th>";
              echo "<th>DATE OF TEST TAKEN</th>";
              echo "<th>EMAIL</th>";
              echo "</tr>";
              while($row=$res->fetch_assoc())
              {
                 $v1=$row['test_name'];
                 $v2=$row['email'];
                 $v3=$row['test_date'];
                 echo "<tr class='ir'>";
                 echo "<td>$v1</td>";
                 echo "<td>$v3</td>";
                 echo "<td>$v2</td>";
                 echo "</tr>";
              }
             echo "</table>";
            }
            else{
             die("error has occurred".$con->error);
             }
             echo "<p style='display:block;text-align:center'><div style='font-size:25px;font-style:bold;display:inline;text-align:center;background-color:blue;color:white;border:2px solid black;'>GROUPING OF NUMBER OF TESTS TAKEN ACCORDING TO USERS IN THIS WEEK</div></p>";
            $sql="select count(test_name) as 'tnm', email from test_taken group by email";
            if($con->query($sql))
            {
             $res=$con->query($sql);
             echo "<table class='t' style='border:3px solid black;margin-left:auto;margin-right:auto'>";
             echo "<tr class='or'>";
             echo "<th>NO OF TESTS TAKEN</th>";
             echo "<th>EMAIL OF USER</th>";
             echo "</tr>";
             while($row=$res->fetch_assoc())
             {
               $v1=$row['tnm'];
               $v2=$row['email'];
               echo "<tr class='ir'>";
               echo "<td>$v1</td>";
               echo "<td>$v2</td>";
               echo "</tr>";
             }
             echo "</table>";
            }
            else{
             die("error has occurred".$con->error);
            }
          echo "<p style='display:block;text-align:center'><div style='font-size:25px;font-style:bold;display:inline;text-align:center;background-color:blue;color:white;border:2px solid black;'>GROUPING OF SCORES ACCORDING TO TESTS</div></p>";
           $sql="select max(score) as 'score',test_name,email from test_taken group by email,test_name";
            if($con->query($sql))
            {
             $res=$con->query($sql);
             echo "<table class='t' style='border:3px solid black;margin-left:auto;margin-right:auto'>";
             echo "<tr class='or'>";
             echo "<th>TEST NAME</th>";
             echo "<th>SCORE</th>";
             echo "<th>USER EMAIL</th>";
             echo "</tr>";
             while($row=$res->fetch_assoc())
             {
               $v1=$row['score'];
               $v2=$row['test_name'];
               $v3=$row['email'];
               echo "<tr class='ir'>";
               echo "<td>$v2</td>";
               echo "<td>$v1</td>";
               echo "<td>$v3</td>";
               echo "</tr>";
             }
             echo "</table>";
            }
            else{
             die("error has occurred".$con->error);
            }
           }
           else
           {
             die("error has occurred".$con->error);
           }
          }
        $con->close();
        }
        else {
          die("wrong password for admin login");
         }
      }
      else{
        die("wrong user name for admin login");
      }
    }
   else
    {
     die("admin password is required");
    }
  }
  else
  {
   die("admin user name is required");
  }
}
?>
</body>
</html>