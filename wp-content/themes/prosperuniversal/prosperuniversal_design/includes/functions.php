<?php
function pager_delete2($num_rows = 0,$per_page = 1,$page =1)
{
	$page_start = ($per_page * $page) - $per_page;
	if ($num_rows <= $per_page) { 
		$num_pages = 1; 
	} else if (($num_rows % $per_page) == 0) { 
		$num_pages = ($num_rows / $per_page); 
	} else { 
		$num_pages = ($num_rows / $per_page) + 1; 
	} 
	$num_pages = (int) $num_pages;
	if($num_pages < $page)
	{
		$page = $page - 1;
	}
	if($page <= 0)
	{
		$page = 1;
	}
	return $num_pages;
}
function pager_delete($num_rows = 0,$per_page = 1,$page =1)
{
	$page_start = ($per_page * $page) - $per_page;
	if ($num_rows <= $per_page) { 
		$num_pages = 1; 
	} else if (($num_rows % $per_page) == 0) { 
		$num_pages = ($num_rows / $per_page); 
	} else { 
		$num_pages = ($num_rows / $per_page) + 1; 
	} 
	$num_pages = (int) $num_pages;
	if($num_pages < $page)
	{
		$page = $page - 1;
	}
	if($page <= 0)
	{
		$page = 1;
	}
	return $page_start;
}
function getValues_str($sorucestr) // return sourcestring-1
{
	$sorucestr = StringRepair5($sorucestr);
	$sorucestr = substr($sorucestr,0,strlen($sorucestr)-1);
	return $sorucestr;
}
function getValues($sorucestr) // return array
{
	$sorucestr = StringRepair5($sorucestr);
	$sorucestr = substr($sorucestr,0,strlen($sorucestr)-1);
	$sorucestr_arr = preg_split("/,/",$sorucestr);
	return $sorucestr_arr;
}

function StringRepair3($temptext)
{
	$temptext=trim($temptext);
	$temptext=str_replace("&#39;","'",$temptext);
	$temptext=str_replace("&#34;","\"",$temptext);
	return $temptext;
}
function StringRepair4($temptext)
{
	$temptext=trim($temptext);
	$temptext=nl2br($temptext);
	$temptext=str_replace("&#39;","'",$temptext);
	$temptext=str_replace("&#34;","\"",$temptext);
	return $temptext;
}

function StringRepair2($temptext)
{
	$temptext=trim($temptext);
	$temptext=str_replace("&#39;","\'",$temptext);
	$temptext=str_replace("&#34;","\"",$temptext);
	return $temptext;
}
function StringRepair5($temptext)
{
	$temptext=trim($temptext);
	$temptext=strip_tags($temptext, '<p><a><b><br><i><sup><sub><em><strong><center><span>');
	$temptext=str_replace("'","&#39;",$temptext);
	$temptext=str_replace("\"","&#34;",$temptext);
	return $temptext;
}
function StringRepair6($temptext)
{
	$temptext=trim($temptext);
	$temptext=strip_tags($temptext, '');
	$temptext=str_replace("'","&#39;",$temptext);
	$temptext=str_replace("\"","&#34;",$temptext);
	return $temptext;
}
function isValidEmail($value){
	$pattern = "/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)+/";
	return preg_match($pattern, $value);
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
function TrimString($tempdata = '',$length = 10)
{
	$tempdata_new = $tempdata;
	if(strlen($tempdata) > $length)
	{
		$tempdata_new = substr($tempdata,0,$length)."..";
	}
	return $tempdata_new;
}
function ClearString($tempdata)
{
	$tempdata=str_replace("\n"," ",$tempdata);
	$tempdata=str_replace("\t"," ",$tempdata);
	if($tempdata=="")
	{
		$tempdata="-";
	}
	return $tempdata;
}
function ClearString2($tempdata)
{
	$tempdata=str_replace("\\r\\n"," ",$tempdata);
	$tempdata=str_replace("\\r"," ",$tempdata);
	$tempdata=str_replace("\\n"," ",$tempdata);
	$tempdata=str_replace("\\t"," ",$tempdata);
	if($tempdata=="")
	{
		$tempdata="-";
	}
	return $tempdata;
}
function displayDate2($tempdate,$tempformat = "Y-m-d")
{
	$tempdarr = split(" ",$tempdate);
	$tempdarr2 = split("-",$tempdarr[0]);
	$tempdarr3 = split(":",$tempdarr[1]);
	if($tempdarr2[0]>1970)
	{
		$dateretun = date($tempformat,mktime($tempdarr3[0],$tempdarr3[1],$tempdarr3[3],$tempdarr2[1],$tempdarr2[2],$tempdarr2[0]));
		return $dateretun;
	}
}
function displayDate($tempdate,$tempformat = "Y-m-d")
{
	$tempdarr = split("-",$tempdate);
	if($tempdarr[0]>1970)
	{
		$dateretun = date($tempformat,mktime(0,0,0,$tempdarr[1],$tempdarr[2],$tempdarr[0]));
		return $dateretun;
	}
}

function displayDatedmy($tempdate,$tempformat = "Y-m-d")
{
	$tempdarr = split("-",$tempdate);
	if($tempdarr[2]>1970)
	{
		$dateretun = date($tempformat,mktime(0,0,0,$tempdarr[1],$tempdarr[0],$tempdarr[2]));
		return $dateretun;
	}
}

function displayDatemdy($tempdate,$tempformat = "Y-m-d")
{
	$tempdarr = split("-",$tempdate);
	if($tempdarr[2]>1970)
	{
		$dateretun = date($tempformat,mktime(0,0,0,$tempdarr[0],$tempdarr[1],$tempdarr[2]));
		return $dateretun;
	}
}

function addDate($tempdate,$nday,$tempformat = "Y-m-d")
{
	$tempdarr = split("-",$tempdate);
	$dateretun = date($tempformat,mktime(0,0,0,$tempdarr[1],$tempdarr[2]-$nday,$tempdarr[0]));
	return $dateretun;
}

function StringRepair($temptext)
{
	$temptext=trim($temptext);
	$temptext=str_replace("'","&#39;",$temptext);
	$temptext=str_replace("\"","&#34;",$temptext);
	return $temptext;
}
function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}
function checkblank($temptext)
{
	$temptext=trim($temptext);
	$temptext=strip_tags($temptext);
	if($temptext == "")
	{
		return true;
	}
	return false;
}
function generatePassword($_len) {

    $_alphaSmall = 'abcdefghijklmnopqrstuvwxyz';            // small letters
    $_alphaCaps  = strtoupper($_alphaSmall);                // CAPITAL LETTERS
    $_numerics   = '1234567890';                            // numerics
    $_specialChars = '`~!@#$%^&*()-_=+]}[{;:,<.>/?\'"\|';   // Special Characters

    $_container = $_alphaSmall.$_alphaCaps.$_numerics;   // Contains all characters
	//$_container = $_alphaSmall.$_alphaCaps.$_numerics.$_specialChars;   // Contains all characters
    $password = '';         // will contain the desired pass

    for($i = 0; $i < $_len; $i++) {                                 // Loop till the length mentioned
        $_rand = rand(0, strlen($_container) - 1);                  // Get Randomized Length
        $password .= substr($_container, $_rand, 1);                // returns part of the string [ high tensile strength ;) ] 
    }
    return $password;       // Returns the generated Pass
}
?>