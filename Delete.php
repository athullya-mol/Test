<?php
$con = mysqli_connect("localhost","root","","student"); 
echo "Before delete data";
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
$id=13;
$sql ="delete from s1mca where id='$id'" ;
$result=mysqli_query($con,$sql);
if($result)
{
    echo "After delete data";
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
}
else
{
    echo "Not working";
}
?>