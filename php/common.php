<?php
function isValidId($book_id)
{
	if(is_array($book_id)){return false;}
	return preg_match("/^[0-9][0-9][0-9]$/", $book_id) ? true : false;
}
function isValidType($type)
{
	if(is_array($type)){return false;}
	return preg_match("/^(rec|mem|occ|fbi|fi|sfs|cas|ess|hpg|spb|sse|tcm|zlg|bul)$/", $type) ? true : false;
}
function isValidCheck($check)
{
	for($i=0;$i<sizeof($check);$i++)
	{
		if(is_array($check[$i])){return false;}
		if(!(preg_match("/^(rec|mem|occ|fbi|fi|sfs|cas|ess|hpg|spb|sse|tcm|zlg|bul)$/", $check[$i])))
		{
			return false;
		}
	}
	return true;
}
function isValidTitle($title)
{
	return is_array($title) ? false : true;
}
function isValidLetter($letter)
{
	if(is_array($letter)){return false;}
	return preg_match('അ' | 'ആ'| 'ഇ' | 'ഈ' | 'ഉ' | 'ഊ' | 'എ' | 'ഏ' | 'ഐ' | 'ഒ' | 'ഓ' | 'ഔ' | 'ക' | 'ഗ' | 'ച' | 'ഛ'| 'ജ' | 'ഞ' | 'ട' | 'ഡ' | 'ത' | 'ദ' | 'ധ' | 'ന' | 'പ' | 'ഫ' | 'ബ' | 'ഭ' | 'മ' | 'യ' | 'ര' | 'റ' | 'ല' | 'വ' | 'ശ' | 'ഷ' | 'സ' | 'ഹ', $letter) ? true : false;
}
function isValidVolume($vol)
{
	if(is_array($vol)){return false;}
	return preg_match("/^[0-9][0-9][0-9]$/", $vol) ? true : false;
}
function isValidPart($part)
{
	if(is_array($part)){return false;}
	return preg_match("/([0-9][0-9]\_[0-9][0-9])||([0-9][0-9])/", $part) ? true : false;
}
function isValidYear($year)
{
	if(is_array($year)){return false;}
	return preg_match("/^([0-9][0-9][0-9][0-9]|[0-9][0-9][0-9][0-9]\-[0-9][0-9])$/", $year) ? true : false;
}
function isValidFeature($feature)
{
	return is_array($feature) ? false : true;
}
function isValidFeatid($featid)
{
	if(is_array($featid)){return false;}
	return preg_match("/^[0-9][0-9][0-9][0-9][0-9]$/", $featid) ? true : false;
}
function isValidAuthid($authid)
{
	if(is_array($authid)){return false;}
	return preg_match("/^[0-9][0-9][0-9][0-9][0-9]$/", $authid) ? true : false;
}
function isValidAuthor($author)
{
	return is_array($author) ? false : true;
}
function isValidText($text)
{
	return is_array($text) ? false : true;
}
function entityReferenceReplace($term)
{
	if(is_array($term))
	{
		$term = "$term";
	}
	
	$term = preg_replace("/<i>/", "", $term);
	$term = preg_replace("/<\/i>/", "", $term);
	$term = preg_replace("/\;/", "&#59;", $term);
	$term = preg_replace("/</", "&#60;", $term);
	$term = preg_replace("/=/", "&#61;", $term);
	$term = preg_replace("/>/", "&#62;", $term);
	$term = preg_replace("/\(/", "&#40;", $term);
	$term = preg_replace("/\)/", "&#41;", $term);
	$term = preg_replace("/\:/", "&#58;", $term);
	$term = preg_replace("/Drop table|Create table|Alter table|Delete from|Desc table|Show databases|iframe/i", "", $term);
	
	return($term);
}
function getYearMonth($volume, $part)
{
	include("connect.php");
	$query = "select distinct year,month from article where volume='$volume' and part='$part'";
	$result = $db->query($query);
	$num_rows = $result ? $result->num_rows : 0;
	if($num_rows > 0) {
		$row = $result->fetch_assoc();
		return($row);
	}
	else {
		$row['year'] = '';
		$row['month'] = '';
		return($row);
	}
}
function getYear($volume)
{
	include("connect.php");
	$query = "select distinct year from article where volume='$volume'";
	$result = $db->query($query);
	$num_rows = $result ? $result->num_rows : 0;
	if($num_rows > 0) {
		$year = '';
		while($row = $result->fetch_assoc()) {
	
			$year = $year . '-' . $row['year'];
		}
		$year = preg_replace('/^\-/', '', $year);
		$year = preg_replace('/\-[0-9][0-9]([0-9][0-9])/', '-$1', $year);
		return( $year );
	}
	else {
		return( '' );
	}
}
function getMonth($month)
{
	$month = preg_replace('/01/', 'January', $month);
	$month = preg_replace('/02/', 'February', $month);
	$month = preg_replace('/03/', 'March', $month);
	$month = preg_replace('/04/', 'April', $month);
	$month = preg_replace('/05/', 'May', $month);
	$month = preg_replace('/06/', 'June', $month);
	$month = preg_replace('/07/', 'July', $month);
	$month = preg_replace('/08/', 'August', $month);
	$month = preg_replace('/09/', 'September', $month);
	$month = preg_replace('/10/', 'October', $month);
	$month = preg_replace('/11/', 'November', $month);
	$month = preg_replace('/12/', 'December', $month);
	
	return $month;
}
function getMonthDevanagari($month)
{

	$month = preg_replace('/01/', 'जनवरी', $month);
	$month = preg_replace('/02/', 'फेब्रवरी', $month);
	$month = preg_replace('/03/', 'मार्च्', $month);
	$month = preg_replace('/04/', 'एप्रिल्', $month);
	$month = preg_replace('/05/', 'मे', $month);
	$month = preg_replace('/06/', 'जून्', $month);
	$month = preg_replace('/07/', 'जुलै', $month);
	$month = preg_replace('/08/', 'अगस्ट्', $month);
	$month = preg_replace('/09/', 'सप्टम्बर्', $month);
	$month = preg_replace('/10/', 'अक्टोबर्', $month);
	$month = preg_replace('/11/', 'नवम्बर्', $month);
	$month = preg_replace('/12/', 'डिसेम्बर्', $month);
	$month = preg_replace('/specialA/', 'विशेषाङ्कः', $month);
	$month = preg_replace('/specialB/', 'विशेषाङ्कः', $month);
	$month = preg_replace('/special/', 'विशेषाङ्कः', $month);
	
	return $month;
}
function getMonthEnglish($month)
{

	$month = preg_replace('/01/', 'January', $month);
	$month = preg_replace('/02/', 'February', $month);
	$month = preg_replace('/03/', 'March', $month);
	$month = preg_replace('/04/', 'April', $month);
	$month = preg_replace('/05/', 'May', $month);
	$month = preg_replace('/06/', 'June', $month);
	$month = preg_replace('/07/', 'July', $month);
	$month = preg_replace('/08/', 'August', $month);
	$month = preg_replace('/09/', 'September', $month);
	$month = preg_replace('/10/', 'October', $month);
	$month = preg_replace('/11/', 'November', $month);
	$month = preg_replace('/12/', 'December', $month);
	$month = preg_replace('/specialA/', 'Special Issue', $month);
	$month = preg_replace('/specialB/', 'Special Issue', $month);
	$month = preg_replace('/special/', 'Special Issue', $month);
	
	return $month;
}
function getMonth_part($month)
{
	$month = preg_replace('/01/', 'Jan', $month);
	$month = preg_replace('/02/', 'Feb', $month);
	$month = preg_replace('/03/', 'Mar', $month);
	$month = preg_replace('/04/', 'Apr', $month);
	$month = preg_replace('/05/', 'May', $month);
	$month = preg_replace('/06/', 'Jun', $month);
	$month = preg_replace('/07/', 'Jul', $month);
	$month = preg_replace('/08/', 'Aug', $month);
	$month = preg_replace('/09/', 'Sep', $month);
	$month = preg_replace('/10/', 'Oct', $month);
	$month = preg_replace('/11/', 'Nov', $month);
	$month = preg_replace('/12/', 'Dec', $month);
	
	return $month;
}

function convert_devanagari($vid)
{
	$vid = preg_replace("/^0/", "", $vid);

	$vid = preg_replace("/0/", "०", $vid);
	$vid = preg_replace("/0/", "०", $vid);
	$vid = preg_replace("/1/", "१", $vid);
	$vid = preg_replace("/2/", "२", $vid);
	$vid = preg_replace("/3/", "३", $vid);
	$vid = preg_replace("/4/", "४", $vid);
	$vid = preg_replace("/5/", "५", $vid);
	$vid = preg_replace("/6/", "६", $vid);
	$vid = preg_replace("/7/", "७", $vid);
	$vid = preg_replace("/8/", "८", $vid);
	$vid = preg_replace("/9/", "९", $vid);
	return($vid);
}

//~ get current volume, issue details

function getCurrentVolumeIssue($database,$db)
{

	mysql_select_db($database,$db);
	mysql_set_charset("utf8",$db);
	
	$query11 = "select distinct volume, issue from article order by volume desc, issue desc limit 1";
	$result11=mysql_query($query11);
	$row11=mysql_fetch_assoc($result11);

	$details['volume'] = $row11['volume'];	
	$details['issue'] = $row11['issue'];	

	return $details;
}
?>
