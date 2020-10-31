<?php
$uphone = $_POST["phone"];
$uname=$_POST["username"];
$upass=$_POST["password"];
$info=json_decode(file_get_contents("website1.json"),true);
$valid=false;
$dat=array();
foreach($info as $data)
{
if($data["name"]==$uname && $data["pass"]==$upass)
{
$valid=true;
break;
}
else
$valid=false;
}
if($valid)
echo "you are already registered......please login.";
else
$info = json_decode(file_get_contents("website1.json"),true);
$user= array();
$user["name"]=$uname;
$user["pass"]=$upass;
$user["phone"]=$uphone;
$info[]=$user;
echo file_put_contents("website1.json",json_encode($info));
header("location:http://localhost/hacktober/temp/pharmalogin.html");
?>
