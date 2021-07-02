<?php
$con=mysqli_connect('localhost',"root","","jquery") or die ("Error connecting with the base");
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['description'])){
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$interest=$_POST['interest'];
$description=$_POST['description'];
 echo $sql="INSERT INTO `record`(`name`, `email`, `contact`, `interest`, `description`) VALUES ('$name','$email','$contact','$interest','$description')";
$response=mysqli_query($con,$sql);
header("location:index.php?i=1");

}
?>
