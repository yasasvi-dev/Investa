<?php
include "dbase.php";
$val2=$_POST["vals"];
// $cook="0:NO";

$str1 ="SELECT * FROM users WHERE cname='$val2[0]' AND cpword='$val2[3]'";
$rs1=$bdd->query($str1) or die("error on $str1");
$i1=$rs1->rowcount();
if ($i1>0){
	$row1=$rs1->fetch();
	$cook="$row1[1]:$row1[0]";
	setcookie('login',$cook);
	$str1 ="SELECT * FROM clevel WHERE clid=$row1[0]";
	$rs2=$bdd->query($str1) or die("error on $str1");
	$row2=$rs2->fetch();
	$cook="$row1[0] : $row1[3]";
	setcookie('login',$cook);
	$strj="<script type='text/javascript'> window.location.href='$row2[2]' </script>";
	echo $strj;
	//header("Location:$row2[2]");
//echo "<h3> OK - $row2[2] </h3>";
}else {
	echo "Incorrect password";
}
?>