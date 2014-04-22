<?php
/**
 * MyBB 1.6
 * 
 *
 * Website: 
 * License: GNU General Public License
 *
 * $Id: 
 */
 
// Disallow direct access to this file for security reasons
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

$plugins->add_hook("pre_output_page", "hello_world");
$plugins->add_hook("postbit", "hello_world_postbit");

function splash_info()
{
	
	return array(
		"name"			=> "Splashes!",
		"description"	=> "Prints random phrases on the index page of a forum. Still in development, but fully functional.",
		"website"		=> "http://writerswanted.byethost13.com",
		"author"		=> "Elf Blade",
		"authorsite"	=> "http://mybb.com",
		"version"		=> "1.0",
		"guid" 			=> "f91996af6732b5a63f676ab8034e87d2",
		"compatibility" => "16*"
	);
}


 





function hello_world($page)
{
	
	$page = str_replace("a_b_c_d", "<iframe src='http://www.writerswanted.byethost13.com/file.php', frameborder=0, sandbox=seamless, height=100px, width=400px, scrolling=no></iframe>", $page);

	//$page = str_replace("<div id=\"content\">", "<div id=\"content\"><p id=\"splash_style\"></p>", $page);
	return $page;
}

function hello_world_postbit(&$post)
{
	$post['message'] = "<strong></strong><br /><br />{$post['message']}";
}
?>