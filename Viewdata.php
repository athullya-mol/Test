<?php
$con = mysqli_connect("localhost","root","","student"); 
$sql="select * from s1mca";
$result=mysqli_query($con,$sql);
if($result)
{
    while($row=mysqli_fetch_array($result))
    {
        $id=$row['id'];
        $name=$row['name'];
        $age=$row['age'];
        $address=$row['address'];
        echo $id."-".$name."-".$age."-".$address.'</br>';
    }
}
?>