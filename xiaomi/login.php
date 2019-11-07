<?php
header("Content-type:text/html;charset=utf-8");
$username=$_GET["username"];
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
}else{
	echo 1;
	"<script>setTimeout(\"window.location.href='login.html'\",2000);</script>";
	mysql_query("insert into xiaomi values('$username')",$conn);
	mysql_close($conn);
}
?>