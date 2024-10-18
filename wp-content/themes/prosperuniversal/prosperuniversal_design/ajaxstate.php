<?php
include("includes/connection.php");
require("includes/functions.php");
$cid=$_GET["q"];
$cid = preg_replace ('/[^\d]/', '', $cid);
if($cid=="")
{
	$cid=0;
}
if($cid==0)
{
	$sql="select cid,pid,cname from states where pid='".$cid."' order by cid";
}
else
{
	$sql="select cid,pid,cname from states where pid='".$cid."' order by cid";
}
$result=mysqli_query($con_website,$sql) or die("cannot select states ".mysqli_error($con_website));
echo "obj.options[obj.options.length] = new Option('- Select State -','');\n";
while($srsw=mysqli_fetch_array($result)){ 
	echo "obj.options[obj.options.length] = new Option('".StringRepair2($srsw["cname"])."',".$srsw["cid"].");\n";
	}
?>