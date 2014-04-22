<?php 

$action=$_POST['action']; 
$textarea=$_POST['textarea']; 

if($_GET['p']){ 
$page=$_GET['p']; 
} 

// Assume your text pages are called, p1.db or p2.db, etc. 
$url = "p".$page.".db"; 
if (file_exists($url)) { 
// do nothing 
} else { 
$url = "p0.txt"; 
} 

// where to go back to after the edit ... 
$return="page.php?p=$page"; 

// Get page 
$data = implode("", file($url));  

if($action=="save"){ 
$newtext=stripslashes($textarea); 
$newtext = str_replace("<?", "", $newtext); 
$newtext = str_replace("?>", "", $newtext); 
$newtext = nl2br($newtext); 
//echo "page: $url<br><br>\n"; 
//echo $newtext; 
$fh = fopen($url, 'w') or die("can't open file"); 
fwrite($fh, $newtext); 
fclose($fh);  
header ("location: edit.php?p=$page"); 
} 
else{ 
echo" 
<html> 
<head><title>Splash Editor</title> 
<style> 
body,html{ 
margin:0px auto; 
width:700px; 
text-align:center; 
} 
#content{ 
margin:0px auto; 
width:700px; 
} 
#middle h1 { 
    color: transparent; 
    font-family:georgia; 
    font-size:12pt; 
    margin:0; 
    color: #dF9100; 
    padding:10px 0px 15px 0px; 
    text-align:left; 
} 
</style> 
<body> 
<div id='content'> 
"; 

$ta=br2nl($data); 

echo" 

Make Changes and click \"Save Changes\" at the very bottom ...<br /> 
<form action='edit.php' method='post'> 
<input type='hidden' name='action' value='save'> 
<input type='hidden' name='p' value='$page'> 
<input type='hidden' name='n' value='$n'> 
<textarea name='textarea' rows='25' cols='80'>$ta</textarea> 
<br /> 
<input type='submit' name='submit' value='Save Changes'> 
</form> 

<div id='middle' style='width:680px; text-align:left; padding-left:20px; border:1px solid #ccc;'> 
</div> 
</div> 
</body> 
</html> 
"; 
} 

function br2nl($str) { 
return preg_replace('=<br */?>=i', "", $str); 
} 

?>