<?php
include 'connectdb.php';
$name=$_POST['name'];
$pass=$_POST['pass'];
$query="select password from signin where email_id='".$name."'";

$run=mysql_query($query);
if(!mysql_query($query))
{
  echo "NOT registered User".mysql_error();
}
else {
  $data=mysql_fetch_array($run);

  if($data[0]!=$pass)
  {
    echo "please check your Password";
  }
  else {
    echo "Welcome Back $name";
    session_start();
    $_SESSION['name']=$name;

    header("location:services.php");
  }
}
 ?>
