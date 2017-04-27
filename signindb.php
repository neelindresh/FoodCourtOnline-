<?php
include 'connectdb.php';
$name=$_POST['Name'];
$mobile=$_POST['Mobile'];
$mail=$_POST['Email'];
$add=$_POST['Address'];
$age=$_POST['Age'];
$dob=$_POST['DOB'];
$pin=$_POST['PinCode'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$query="insert into signin values('".$name."','".$mobile."','".$mail."','".$add."','".$age."','".$pin."','".$pass."')";
if($pass!=$repass)
{
  echo "Password and Confirm Password does not Match";
}
else {
  if(!mysql_query($query))
  {
    echo "Data were Not inserted".mysql_error();

  }
  else {
    {
      echo "welcome $name";
      header("location:login.php");
    }
  }

}
?>
