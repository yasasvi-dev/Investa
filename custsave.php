<?php
include "dbase.php";
include "sqlobj.php";
$myclass=new sqlobj($bdd);
$cookie = $_COOKIE['login'];
$ck = explode(':', $cookie);
$cid = $ck[1];
echo "cookie is".$cookie;

$cid = $myclass -> maxacno("customer",array(),"cid");
$vals=$_POST["pvals"];

// echo $vals;
// print_r($vals);
// $str1="select * from customer order by cid desc";
// $rs1=$bdd->query($str1) or die("error on $str1");
// $row1=$rs1->fetch();
// $cid=$row1[0]+1;
// if($vals[3]==0){
$str1="INSERT into customer values($cid,'$vals[1]','$vals[2]','$vals[3]')";

// else{
// $str1="update hotels set hname='$vals[0]',hadd='$vals[1]',htel='$vals[2]',
// hemail='$vals[3]',hcperson='$vals[4]',hctel='$vals[5]',hcmail='$vals[6]',
// hcweb='$vals[7]',hlat='$vals[8]',hlong='$vals[9]',hstatus='$vals[10]' where hid='$vals[11]'";

//$ts1=$bdd->query($str1) or die("error on $str1");
$myclass -> adddata ($str1);
echo "complete";
?>