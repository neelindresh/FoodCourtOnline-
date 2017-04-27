<html>
<head>
</head>
<body>
<section>
  <h1>Your Bill</h1>
<?php
include 'connectdb.php';
$item=$_GET['food'];
//echo $item;
//$arrayName = array(50,60,70);
$total=0;
foreach ($item as $val) {
  # code...
  $query="select price from food where name='".$val."'";
  $run=mysql_query($query);
  $data=mysql_fetch_array($run);
  echo $val."--->";
  echo $data[0]."<br>";
  $total=$total+$data[0];
}
echo "Total=$total";

?>

</section>



</body>
</html>
