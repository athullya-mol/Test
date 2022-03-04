<?php
if(isset($_POST['submit']))
{
$con = mysqli_connect("localhost","root","","student"); 
echo "Before updating data";
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
$id=1;
$sql ="update s1mca set name='Sarin', age='20' where id='$id'" ;
$result=mysqli_query($con,$sql);
if($result)
{
    echo "After update data";
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
}
?>