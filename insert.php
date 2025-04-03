<?php
if(isset($_POST['Submit'])) 
{
$N = $_POST['stname'];
$I = $_POST['stid'];
$P = $_POST['stphone'];
$S = $_POST['spec'];
$con = mysqli_connect("localhost","id12728397_ann","ann2980","id12728397_semester2");
if (!$con)
  {
  die("Connection failed: " . mysqli_connect_error());
  }
$result = "INSERT INTO student VALUES('$N','$I',$P,'$S')";
if(mysqli_query($con,$result))
{
    echo "New record created successfully";
} 
else
{
    echo "Error: " . $result . "<br>" . mysqli_error($con);
}
mysqli_close($con);
}
?> 
