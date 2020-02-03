<?php session_start();
$d = file_get_contents('data.json');
$d = json_decode($d,true);



//echo "<br><br>";
//print_r($x);

array_push($d, $_POST);
$_SESSION['rn']=count($d);
$d[$_SESSION['rn']-1]['recieptnum']=$_SESSION['rn'];
$d = json_encode($d);
file_put_contents('data.json', $d);
header('location:receipt.php');
?>