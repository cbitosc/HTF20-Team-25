<?php
$uphone = $_POST["phone"];
$uname=$_POST["username"];
$upass=$_POST["password"];
$info=json_decode(file_get_contents("website.json"),true);
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
$info = json_decode(file_get_contents("website.json"),true);
$user= array();
$user["name"]=$uname;
$user["pass"]=$upass;
$user["phone"]=$uphone;
$info[]=$user;
echo file_put_contents("website.json",json_encode($info));
header("location:http://localhost/excite/medino/elements.html");*/

$umediname = $_POST["mediname"];
$uquan = $_POST["quan"];
$uloc = $_POST["loc"];
$usearch = $_POST["search"];
if ( $umediname == "zincowit" && $uloc == "kukatpally" && $usearch >=2 && $usearch <= 5)
{
  if($uquan >= 1 && $uquan <= 15)
  include "pharmalist.html";
  else
  include "notavai.html";
}
else if ($umediname == "myospaz" && $uloc == "kavadiguda" && $usearch >= 2 && $usearch <= 6){
  if($uquan >= 1 && $uquan <= 10)
  include "pharmalist1.html";
  else
  include "notavai.html";
}

else if ($umediname == "isotroin"  && $uloc == "ashok nagar" && $usearch >= 2 && $usearch <= 6){
  if($uquan >= 1 && $uquan <= 30)
  include "pharmalist2.html";
  else
  include "notavai.html";

}

else if ($umediname == "limcee" && $uloc == "domalguda" && $usearch >= 2 &&$usearch <= 6)
{
  if($uquan >= 1 && $uquan <= 60)
  include "pharmalist3.html";
  else
  include "notavai.html";

}

else if ($umediname == "karval"  && $uloc == "barkatpura" && $usearch >= 1 && $usearch <= 7)
{
  if($uquan >= 1 && $uquan <= 5)
  include "pharmalist4.html";
  else
  include "notavai1.html";

}
else if ($umediname == "tazloc"&& $uloc == "khairatabad" && $usearch >= 2 && $usearch <= 8)
{
  if($uquan >= 1 && $uquan <= 15)
  include "pharmalist5.html";
  else
  include "notavai.html";

}
else if ($umediname == "metsmall"  && $uloc == "RTC X roads" && $usearch >= 1 && $usearch <= 8){
  if($uquan >= 1 && $uquan <= 20)
  include "pharmalist6.html";
  else
  include "notavai.html";
}

else 
echo 'Sorry!! medicines are not available in the medical shops of the specified search radius';
?>




