<?php
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$con = mysqli_connect("localhost","root","","student"); 
$sql ="insert into s1mca(id,name,age,address) values ('$id','$name','$age','$address')" ;
$result=mysqli_query($con,$sql);
if($result)
{
    echo "success";
}
else
{
    echo "Fail";
}
}
else
{
    echo"wrong";
}
?>