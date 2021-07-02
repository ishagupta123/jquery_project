<?php
$con=mysqli_connect('localhost',"root","","jquery") or die ("Error connecting with the base");
if (isset($_POST['email']))
 {
 	 $email=$_POST['email'];
 	
 	 $sql="select email from record where email='$email' ";
     $response3=mysqli_query($con,$sql)or die("error");
     $num=mysqli_num_rows($response3);
     if($num>=1){
       /* echo '<script>alert("This E-mail is already exist")</script>';*/
        echo "<div class='alert alert-danger'>";
        echo "This E-mail is already exist";
        echo "</div";
     }
     else{
      echo "<p style='float:right;'> &#9989;</p>";
     }
 }
?>