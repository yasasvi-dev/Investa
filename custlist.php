<?php
include 'dbase.php';
include 'sqlobj.php';

$myclass = new sqlobj($bdd);

$cookie = $_COOKIE['login'];
$cookiearray = explode(":" , $cookie);
echo $cookie;



$sql = "SELECT * FROM customer WHERE cid = $cid";
// echo $sql;

$shindex = array(0,1,2,3);
$valindex = array(0,1);
$button = array(
    ["head"=>"<button type='button' class='btn btn-success'>Edit</button>", "cback"=>"editroom"],
    ["head"=>"<button type='button' class='btn btn-primary'>Print</button>", "cback"=>"printroom"],
    
);

$tbl = $myclass -> showdatatablebtn($sql , $shindex , $valindex , $button ,'tableli');
echo $tbl;
?>