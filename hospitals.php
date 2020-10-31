<?php
$uloc = $_POST["location"];
$usearch = $_POST["search"];
if ( $uloc == "lower tank bund" && $usearch >=2 && $usearch <= 5)
{
  include "hospitallist.html";
}
else if ($uloc == "somajiguda" && $usearch >= 2 && $usearch <= 6)
{
  include "hospitallist1.html";
}

else if ($uloc == "banjara hills" && $usearch >= 2 && $usearch <= 6)
{
  include "hospitallist2.html";
  
}

else if ($uloc == "uppal" && $usearch >= 2 && $usearch <= 6)
{
  include "hospitallist3.html";

}

else if ($uloc == "secunderabad" && $usearch >= 1 && $usearch <= 7)
{
  include "hospitallist4.html";
  
}

else 
echo 'Sorry!! This loaction has no hospitals';
?>




