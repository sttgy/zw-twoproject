<?php
header("Content-type:text/html;charset=utf-8");
$username=$_POST["username"];
$conn=mysql_connect("localhost","root","root");
if($conn){
	mysql_select_db("xiaomisql");
}else{
	echo "链接失败";
}
$result=mysql_query("select * from xiaomi where userphone='$username'",$conn);
$rows=mysql_num_rows($result);
if($rows==1){
	echo 0;
	// "<script>setTimeout(\"window.location.href='index.html'\",2000);</script>";
}else{
	echo 1;
	mysql_close($conn);
}
?>