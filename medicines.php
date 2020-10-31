<?php
$umediname = $_POST["mediname"];
$uquan = $_POST["quan"];
$uloc = $_POST["loc"];
$usearch = $_POST["search"];
if ( $umediname == "zincowit" && $uloc == "kukatpally" && $usearch >=2 && $usearch <= 5)
{
  if($uquan >= 1 && $uquan <= 15)
  include "medilist.html";
  else
  include "notavai.html";
}
else if ($umediname == "myospaz" && $uloc == "kavadiguda" && $usearch >= 2 && $usearch <= 6){
  if($uquan >= 1 && $uquan <= 10)
  include "medilist1.html";
  else
  include "notavai.html";
}

else if ($umediname == "isotroin"  && $uloc == "ashok nagar" && $usearch >= 2 && $usearch <= 6){
  if($uquan >= 1 && $uquan <= 30)
  include "medilist2.html";
  else
  include "notavai.html";

}

else if ($umediname == "limcee" && $uloc == "domalguda" && $usearch >= 2 &&$usearch <= 6)
{
  if($uquan >= 1 && $uquan <= 60)
  include "medilist3.html";
  else
  include "notavai.html";

}

else if ($umediname == "karval"  && $uloc == "barkatpura" && $usearch >= 1 && $usearch <= 7)
{
  if($uquan >= 1 && $uquan <= 5)
  include "medilist4.html";
  else
  include "notavai1.html";

}
else if ($umediname == "tazloc"&& $uloc == "khairatabad" && $usearch >= 2 && $usearch <= 8)
{
  if($uquan >= 1 && $uquan <= 15)
  include "medilist5.html";
  else
  include "notavai.html";

}
else if ($umediname == "metsmall"  && $uloc == "RTC X roads" && $usearch >= 1 && $usearch <= 8){
  if($uquan >= 1 && $uquan <= 20)
  include "medilist6.html";
  else
  include "notavai.html";
}

else 
include "notavai.html";
//echo 'Sorry!! medicines are not available in the medical shops of the specified search radius';
?>




