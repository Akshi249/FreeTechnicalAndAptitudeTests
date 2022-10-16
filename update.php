<!DOCTYPE html>
<html>
<head>
<title>updating...data</title>
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
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if($_POST['var']!='stupid')
  {
    if(!empty($_POST['date']))
    {
      if(!empty($_POST['tnme']))
      {
        if(!empty($_POST['em']))
        {
          $date=$_POST['date'];
          $testname=$_POST['tnme'];
          $email=$_POST['em'];
          $remail=$_POST['var'];
          if($remail==$email)
          {
            $con=new mysqli("localhost","root","","free_test");
            if($con->connect_error)
             {
              die("connection failed".$con->connect_error);
             }
            else
             {
               if($testname=="aptitude quiz")
               {
                 $sql="select * from is_test_taken where test_name='$testname' and email='$email'";
                 if($con->query($sql))
                 {
                   $res=$con->query($sql);
                   if($res->num_rows==0)
                   {
                     $sql="insert into is_test_taken(email,test_name,status) values('$email','$testname',1)";
                    if($con->query($sql))
                    {
                    echo "<div style='text-align:center;margin-top:150px;font-style:bold;font-size:20px;text-align:center'>Hello $email</div>"."<br>";
                    echo "<div style='text-align:center;font-style:bold;font-size:20px;text-align:center'>Here are your test results</div>"."<br>";
                    $cnt=0;
                    if(!empty($_POST['fqans'])){
                    $f=$_POST['fqans'];
                    if($f=="150")
                    $cnt=$cnt+1;
                    }
                    else
                    $f="";
                    if(!empty($_POST['sqans'])){
                    $s=$_POST['sqans'];
                    if($s=="698")
                    $cnt=$cnt+1;
                    }
                    else 
                    $s="";
                    if(!empty($_POST['tqans'])){
                    $t=$_POST['tqans'];
                    if($t=="16")
                    $cnt=$cnt+1;
                    }
                    else
                    $t="";
                    if(!empty($_POST['ftqans'])){
                    $ft=$_POST['ftqans'];
                    if($ft=="19")
                    $cnt=$cnt+1;
                    }
                    else
                    $ft="";
                    if(!empty($_POST['ffqans'])){
                    $ff=$_POST['ffqans'];
                    if($ff=="yd/x")
                    $cnt=$cnt+1;
                    }
                    else
                    $ff="";
                    $sql="insert into test_taken(test_name,test_date,score,email) values('$testname','$date',$cnt,'$email')";
                    if(!$con->query($sql))
                     die("ERROR: ".$con->error);
                    echo "<form action='aptsol.php' method='post'>";
                    echo "<p style='display:none'><input type='text' name='fq' value=$f></p>"; 
                    echo "<p style='display:none'><input type='text' name='sq' value=$s></p>"; 
                    echo "<p style='display:none'><input type='text' name='tq'  value=$t></p>"; 
                    echo "<p style='display:none'><input type='text' name='ftq' value=$ft></p>";
                    echo "<p style='display:none'><input type='text' name='ffq' value=$ff></p>"; 
                    echo "<p style='text-align:center'><input type='submit' value='MY TEST RESULTS' style='text-align:center;font-style:bold;font-size:25px'></p>"; 
                    echo "</form>";     
                    }
                    else
                    {
                     $con->close();
                    die("Error: ".$con->error);
                    }
                   }
                   else
                   {
                     echo "Seems you have already taken this test..in this week";
                     $con->close();
                     exit();
                   }
                 }
                 else 
                 {
                   die("ERROR:".$con->error);
                 }
               }
              else if($testname=="c programming quiz")
               {
                 $sql="select * from is_test_taken where test_name='$testname' and email='$email'";
                 if($con->query($sql))
                 {
                   $res=$con->query($sql);
                   if($res->num_rows==0)
                   {
                     $sql="insert into is_test_taken(email,test_name,status) values('$email','$testname',1)";
                    if($con->query($sql))
                    {
                    echo "<div style='text-align:center;margin-top:150px;font-style:bold;font-size:20px;text-align:center'>Hello $email</div>"."<br>";
                    echo "<div style='text-align:center;font-style:bold;font-size:20px;text-align:center'>Here are your test results</div>"."<br>";
                    $cnt=0;
                    if(!empty($_POST['fqans'])){
                    $f=$_POST['fqans'];
                    if($f=="1")
                    $cnt=$cnt+1;
                    }
                    else
                    $f="";
                    if(!empty($_POST['sqans'])){
                    $s=$_POST['sqans'];
                    if($s=="all are valid")
                    $cnt=$cnt+1;
                    }
                    else 
                    $s="";
                    if(!empty($_POST['tqans'])){
                    $t=$_POST['tqans'];
                    if($t=="return");
                    $cnt=$cnt+1;
                    }
                    else
                    $t="";
                    if(!empty($_POST['ftqans'])){
                    $ft=$_POST['ftqans'];
                    if($ft=="0")
                    $cnt=$cnt+1;
                    }
                    else
                    $ft="";
                    if(!empty($_POST['ffqans'])){
                    $ff=$_POST['ffqans'];
                    if($ff=="true")
                    $cnt=$cnt+1;
                    }
                    else
                    $ff="";
                    $sql="insert into test_taken(test_name,test_date,score,email) values('$testname','$date',$cnt,'$email')";
                    if(!$con->query($sql))
                     die("ERROR: ".$con->error);
                    echo "<form action='cquizsol.php' method='post'>";
                    echo "<p style='display:none'><input type='text' name='fq' value=$f ></p>"; 
                    echo "<p style='display:none'><input type='text' name='sq' value=$s></p>"; 
                    echo "<p style='display:none'><input type='text' name='tq' value=$t ></p>"; 
                    echo "<p style='display:none'><input type='text' name='ftq' value=$ft ></p>";
                    echo "<p style='display:none'><input type='text' name='ffq' value=$ff></p>"; 
                    echo "<p style='text-align:center'><input type='submit' value='MY TEST RESULTS' style='text-align:center;font-style:bold;font-size:25px'></p>"; 
                    echo "</form>";     
                    }
                    else
                    {
                     $con->close();
                    die("Error: ".$con->error);
                    }
                   }
                   else
                   {
                     echo "Seems you have already taken this test..in this week";
                     $con->close();
                     exit();
                   }
                 }
                 else 
                 {
                   die("ERROR:".$con->error);
                 }
               }
              else if($testname=="java programming quiz")
               {
                 $sql="select * from is_test_taken where test_name='$testname' and email='$email'";
                 if($con->query($sql))
                 {
                   $res=$con->query($sql);
                   if($res->num_rows==0)
                   {
                     $sql="insert into is_test_taken(email,test_name,status) values('$email','$testname',1)";
                    if($con->query($sql))
                    {
                    echo "<div style='text-align:center;margin-top:150px;font-style:bold;font-size:20px;text-align:center'>Hello $email</div>"."<br>";
                    echo "<div style='text-align:center;font-style:bold;font-size:20px;text-align:center'>Here are your test reslts</div>"."<br>";
                    $cnt=0;
                    if(!empty($_POST['fqans'])){
                    $f=$_POST['fqans'];
                    if($f=="static")
                    $cnt=$cnt+1;
                    }
                    else
                    $f="";
                    if(!empty($_POST['sqans'])){
                    $s=$_POST['sqans'];
                    if($s=="abstract class")
                    $cnt=$cnt+1;
                    }
                    else 
                    $s="";
                    if(!empty($_POST['tqans'])){
                    $t=$_POST['tqans'];
                    if($t=="true")
                    $cnt=$cnt+1;
                    }
                    else
                    $t="";
                    if(!empty($_POST['ftqans'])){
                    $ft=$_POST['ftqans'];
                    if($ft=="12")
                    $cnt=$cnt+1;
                    }
                    else
                    $ft="";
                    if(!empty($_POST['ffqans'])){
                    $ff=$_POST['ffqans'];
                    if($ff=="all are valid")
                    $cnt=$cnt+1;
                    }
                    else
                    $ff="";
                    $sql="insert into test_taken(test_name,test_date,score,email) values('$testname','$date',$cnt,'$email')";
                    if(!$con->query($sql))
                     die("ERROR: ".$con->error);
                    echo "<form action='javaquizsol.php' method='post'>";
                    echo "<p style='display:none'><input type='text' value=$f  name='fq'></p>"; 
                    echo "<p style='display:none'><input type='text' value=$s  name='sq'></p>"; 
                    echo "<p style='display:none'><input type='text' value=$t  name='tq'></p>"; 
                    echo "<p style='display:none'><input type='text' value=$ft  name='ftq'></p>";
                    echo "<p style='display:none'><input type='text' value=$ff  name='ffq'></p>"; 
                    echo "<p style='text-align:center;'><input type='submit' value='MY TEST RESULTS' style='font-style:bold;font-size:25px'></p>"; 
                    echo "</form>";     
                    }
                    else
                    {
                     $con->close();
                    die("Error: ".$con->error);
                    }
                   }
                   else
                   {
                     echo "Seems you have already taken this test..in this week";
                     $con->close();
                     exit();
                   }
                 }
                 else 
                 {
                   echo "ERROR:".$con->error;
                   $con->close();
                   exit();
                 }
               }
              else if($testname=="javascript quiz")
               {
                  $sql="select * from is_test_taken where test_name='$testname' and email='$email'";
                 if($con->query($sql))
                 {
                   $res=$con->query($sql);
                   if($res->num_rows==0)
                   {$cnt=0;
                     $sql="insert into is_test_taken(email,test_name,status) values('$email','$testname',1)";
                    if($con->query($sql))
                    {
                    echo "<div style='text-align:center;margin-top:150px;font-style:bold;font-size:20px;text-align:center'>Hello $email</div>"."<br>";
                    echo "<div style='text-align:center;font-style:bold;font-size:20px;text-align:center'>Here are your test results</div>"."<br>";
                    if(!empty($_POST['fqans'])){
                    $f=$_POST['fqans'];
                    if($f=="menu")
                    $cnt=$cnt+1;
                    }
                    else
                    $f="";
                    if(!empty($_POST['sqans'])){
                    $s=$_POST['sqans'];
                    if($s=="true")
                    $cnt=$cnt+1;
                    }
                    else 
                    $s="";
                    if(!empty($_POST['tqans'])){
                    $t=$_POST['tqans'];
                    if($t=="forEach()")
                    $cnt=$cnt+1;
                    }
                    else
                    $t="";
                    if(!empty($_POST['ftqans'])){
                    $ft=$_POST['ftqans'];
                    if($ft=="true")
                    $cnt=$cnt+1;
                    }
                    else
                    $ft="";
                    if(!empty($_POST['ffqans'])){
                    $ff=$_POST['ffqans'];
                    if($ff=="reverse()")
                    $cnt=$cnt+1;
                    }
                    else
                    $ff="";
                    $sql="insert into test_taken(test_name,test_date,score,email) values('$testname','$date',$cnt,'$email')";
                    if(!$con->query($sql))
                     die("ERROR: ".$con->error);
                    echo "<form action='jssol.php' method='post'>";
                    echo "<p style='display:none'><input type='text' value=$f  name='fq'></p>"; 
                    echo "<p style='display:none'><input type='text' value=$s  name='sq'></p>"; 
                    echo "<p style='display:none'><input type='text' value=$t  name='tq'></p>"; 
                    echo "<p style='display:none'><input type='text' value=$ft name='ftq'></p>";
                    echo "<p style='display:none'><input type='text' value=$ff  name='ffq'></p>"; 
                    echo "<p style='text-align:center'><input type='submit' value='MY TEST RESULTS' style='text-align:center;font-style:bold;font-size:25px'></p>"; 
                    echo "</form>";     
                    }
                    else
                    {
                     $con->close();
                    die("Error: ".$con->error);
                    }
                   }
                   else
                   {
                     echo "Seems you have already taken this test..in this week";
                     $con->close();
                     exit();
                   }
                 }
                 else 
                 {
                   die("ERROR:".$con->error);
                 }
               }
              else if($testname=="mysql quiz")
               {
                 $sql="select * from is_test_taken where test_name='$testname' and email='$email'";
                 if($con->query($sql))
                 {
                   $res=$con->query($sql);
                   if($res->num_rows==0)
                   {
                     $sql="insert into is_test_taken(email,test_name,status) values('$email','$testname',1)";
                    if($con->query($sql))
                    {
                    echo "<div style='text-align:center;margin-top:150px;font-style:bold;font-size:20px;text-align:center'>Hello $email</div>"."<br>";
                    echo "<div style='text-align:center;font-style:bold;font-size:20px;text-align:center'>Here are your test results</div>"."<br>";
                    $cnt=0;
                    if(!empty($_POST['fqans'])){
                    $f=$_POST['fqans'];
                    if($f=="Mysqldbcopy")
                    $cnt=$cnt+1;
                    }
                    else
                    $f="";
                    if(!empty($_POST['sqans'])){
                    $s=$_POST['sqans'];
                    if($s=="insert")
                    $cnt=$cnt+1;
                    }
                    else 
                    $s="";
                    if(!empty($_POST['tqans'])){
                    $t=$_POST['tqans'];
                    if($t=="column name")
                    $cnt=$cnt+1;
                    }
                    else
                    $t="";
                    if(!empty($_POST['ftqans'])){
                    $ft=$_POST['ftqans'];
                    if($ft=="Fetchrow_arrayref()")
                    $cnt=$cnt+1;
                    }
                    else
                    $ft="";
                    if(!empty($_POST['ffqans'])){
                    $ff=$_POST['ffqans'];
                    if($ff=="Relay Log")
                    $cnt=$cnt+1;
                    }
                    else
                    $ff="";
                    $sql="insert into test_taken(test_name,test_date,score,email) values('$testname','$date',$cnt,'$email')";
                    if(!$con->query($sql))
                     die("ERROR: ".$con->error);
                    echo "<form action='mysqlsol.php' method='post'>";
                    echo "<p style='display:none'><input type='text' value=$f  name='fq'></p>"; 
                    echo "<p style='display:none'><input type='text' value=$s name='sq'></p>"; 
                    echo "<p style='display:none'><input type='text' value=$t  name='tq'></p>"; 
                    echo "<p style='display:none'><input type='text' value=$ft  name='ftq'></p>";
                    echo "<p style='display:none'><input type='text' value=$ff name='ffq'></p>"; 
                    echo "<p style='text-align:center'><input type='submit' value='MY TEST RESULTS' style='text-align:center;font-style:bold;font-size:25px'></p>"; 
                    echo "</form>";     
                    }
                    else
                    {
                     $con->close();
                    die("Error: ".$con->error);
                    }
                   }
                   else
                   {
                     echo "Seems you have already taken this test..in this week";
                     $con->close();
                     exit();
                   }
                 }
                 else 
                 {
                   die("ERROR:".$con->error);
                 }
               }
             }
          }
          else
          {
            echo "you have entered an email which is not registered with us. please try entering the registered email";
            exit();
          }
        }
        else
        {
          echo "registered email is required";
          exit();
        }
      }
      else
      {
       echo "test name is required";
       exit();
      }
    }
    else
    {
      echo "date of taking test is required";
      exit();
    }
  }
  else
  {
    echo "seems you are not loggen in please try after loggin in";
    echo "THANK YOU";
    exit();
  }
}
?>
</body>
</html>