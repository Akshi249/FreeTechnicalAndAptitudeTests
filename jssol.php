<!DOCTYPE html>
<html>
<head>
<title>c programming quiz solutions</title>
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
if($_SERVER['REQUEST_METHOD']=="POST")
{
 $fq=$_POST['fq'];
 $sq=$_POST['sq'];
 $tq=$_POST['tq'];
 $ftq=$_POST['ftq'];
 $ffq=$_POST['ffq'];
echo "<p style='font-style:bold;font-size:20px'>Question 1</p>";
echo "<p style='font-style:bold;font-size:20px'>Your answer:$fq</p>";
echo "<p style='font-style:bold;font-size:20px'>Correct answer:menu</p>";
echo "<p style='font-style:bold;font-size:20px'>Explanation:</p>";
echo '<div style="font-size:19px;font-style:bold">
 <p>please refer the below mentioned link for vedio solution of cencepts</p>
 <vedio width="320" height="240" controls><source src="https://youtu.be/ZrHusMEcNak" type="vedio/mp4">something went wrong</vedio>
 </div>'."<br>";
if(empty($fq)){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have not answered this question</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
else if($fq=="menu"){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have answered this question correctly..</p>"."<br>";
echo "<p style='font-style:bold;font-size:30px;border:2px solid black;display:inline;background-color:green'>+1<span>&#128512</span></p>";
}
else{ 
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>your answer to this question is wrong</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
echo "<pre style='border-bottom:4px solid black'></pre>"."<br>";

echo "<p style='font-style:bold;font-size:20px'>Question 2</p>";
echo "<p style='font-style:bold;font-size:20px'>Your answer:$sq</p>";
echo "<p style='font-style:bold;font-size:20px'>Correct answer:true</p>";
echo "<p style='font-style:bold;font-size:20px'>Explanation:</p>";
echo '<div style="font-style:bold;font-size:19px">
  <p>please refer the below mentioned link for vedio solution of cencepts</p>
 <vedio width="320" height="240" controls><source src="https://youtu.be/Zgqa4nsyNFY" type="vedio/mp4">something went wrong</vedio>
</div>'."<br>";
if(empty($sq)){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have not answered this question</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
else if($sq=="true"){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have answered this question correctly..</p>"."<br>";
echo "<p style='font-style:bold;font-size:30px;border:2px solid black;display:inline;background-color:green'>+1<span>&#128512</span></p>";
}
else{
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>your answer to this question is wrong</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
echo "<pre style='border-bottom:4px solid black'></pre>"."<br>";


echo "<p style='font-style:bold;font-size:20px'>Question 3</p>";
echo "<p style='font-style:bold;font-size:20px'>Your answer:$tq</p>";
echo "<p style='font-style:bold;font-size:20px'>Correct answer:forEach()</p>";
echo "<p style='font-style:bold;font-size:20px'>Explanation:</p>";
echo '<div style="font-style:bold;font-size:19px">
  <p>please refer the below mentioned link for vedio solution of cencepts</p>
 <vedio width="320" height="240" controls><source src="https://youtu.be/3SJ4HEU5Hq0" type="vedio/mp4">something went wrong</vedio>
</div>'."<br>";
if(empty($tq)){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have not answered this question</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
else if($tq=="forEach()"){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have answered this question correctly..</p>"."<br>";
echo "<p style='font-style:bold;font-size:30px;border:2px solid black;display:inline;background-color:green'>+1<span>&#128512</span></p>";
}
else{ 
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>your answer to this question is wrong</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
echo "<pre style='border-bottom:4px solid black'></pre>"."<br>";


echo "<p style='font-style:bold;font-size:20px'>Question 4</p>";
echo "<p style='font-style:bold;font-size:20px'>Your answer:$ftq</p>";
echo "<p style='font-style:bold;font-size:20px'>Correct answer:true</p>";
echo "<p style='font-style:bold;font-size:20px'>Explanation:</p>";
echo '<div style="font-style:bold;font-size:19px">
 <p>please refer the below mentioned link for vedio solution of cencepts</p>
 <vedio width="320" height="240" controls><source src="https://youtu.be/S1dWe3f2xm0" type="vedio/mp4">something went wrong</vedio>
</div>'."<br>";
if(empty($ftq)){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have not answered this question</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
else if($ftq=="true"){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have answered this question correctly..</p>"."<br>";
echo "<p style='font-style:bold;font-size:30px;border:2px solid black;display:inline;background-color:green'>+1<span>&#128512</span></p>";
}
else {
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>your answer to this question is wrong</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
echo "<pre style='border-bottom:4px solid black'></pre>"."<br>";


echo "<p>Question 5</p>";
echo "<p>Your answer:$ffq</p>";
echo "<p>Correct answer:reverse()</p>";
echo "<p>Explanation:</p>";
echo '<div style="font-size:19px;font-style:bold">
 <p>please refer the below mentioned link for vedio solution of cencepts</p>
 <vedio width="320" height="240" controls><source src="https://youtu.be/5uLhHSu8_uw" type="vedio/mp4">something went wrong</vedio>
</div>'."<br>";
if(empty($ffq)){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have not answered this question</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
if($ffq=="reverse()"){
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>You have answered this question correctly..</p>"."<br>";
echo "<p style='font-style:bold;font-size:30px;border:2px solid black;display:inline;background-color:green'>+1<span>&#128512</span></p>";
}
else{
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>your answer to this question is wrong</p>"."<br>";
echo "<p style='border:2px solid black;background-color:green;display:inline;font-size:30px;font-style:bold;color:white;text-align:left'>+0<span>&#128533</span></p>";
}
echo "<pre style='border-bottom:4px solid black'></pre>"."<br>";


}
?>
</body>
</html>