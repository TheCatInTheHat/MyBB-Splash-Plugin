SPLASH PLUGIN Version: 1.0.0 Date:4/22/14
===========================================================

GENERAL INFORMATION
-----------------------------------------------------------
Description: This plugin is a handy little program that prints a random phrase on the index page of a MyBB forum. These random splashes are easily changed and added. This plugin is still in it's early stages and is a bit rough around the edges, but is still fully operational.
Version: 1.0
Readme Date: 4/22/14
Author: Elf Blade
Contact author: blaisthinks98@gmail.com
Note: This plugin will not work if the sample MyBB plugin "Hello World" is activated.

INSTALLATION
------------------------------------------------------------
To install this plugin, follow these steps.

1. Unzip the "Splashes"  

2. Before uploading anything, go into the "Splashes" file and open the secure.php. Locate the if statement that looks like this:

if($user == "admin"
&& $pass == "admin")

This is the information you will need to edit the splash file from the secure.php page. Change out the first "admin" for what you want 
to be the username, then change out second "admin" for what you want the password to be. Don't forget to save the file.

3. Install the contents of the Upload file into your forum's files as instructed below:

		1. Put file.php, secure.php, and edit.php in the sites root files.
		2. Put the splash.php file into inc/plugins file, along with all the other plugins.


4. Go into your Admin CP, then go into Templates and Style. Once you're their click "Templates." In the templates section it will 
list the templates used by your themes; click on the templates used by your forum's theme. Expand the "Index Page Templates," then go into "index."

5. You will now be in the edit template page. Insert this code right after the <body> tag:

<style>
#splash {
position: absolute;
-webkit-transform: rotate(-10deg);
transform: rotate(-10deg);
-ms-transform:rotate(-10deg);
top:1px;
left:10px
position: absolute;
    white-space: nowrap;
    -webkit-animation: UpThenDown 10s infinite;
    animation: UpThenDown 10s infinite;
}

@-webkit-keyframes UpThenDown {
    10%   {top: 0%;}
    20%  {top: 1%;}
    30% {top: 0%;}
    40%   {top: 1%;}
    50%  {top: 0%;}
    60% {top: 1%;}
    70%   {top: 0%;}
    80%  {top: 1%;}
    90% {top: 0%;}
    100%   {top: 1%;}
   }

@keyframes UpThenDown{
    10%   {top: 0%;}
    20%  {top: 1%;}
    30% {top: 0%;}
    40%   {top: 1%;}
    50%  {top: 0%;}
    60% {top: 1%;}
    70%   {top: 0%;}
    80%  {top: 1%;}
    90% {top: 0%;}
    100%   {top: 1%;}
   }	
</style>
<p id="splash"> 

a_b_c_d

</p id="splash">

6. Now, activate the plugin.

7. Next you need to add splashes. This plugin makes it very easy. Simply follow these instructions:

	1. Go to your forum's site. In the address bar add, "/secure.php" after the ".com" (without the quotes, of course". If there 
happens to be a "/index.php" at the end of the site's url in the address bar, just replace the "index" with "secure."

	2. The page it brings you too should be blank, but with two boxes, asking for the username and password. These are the ones 
you put in the place of the two "admin"'s. Put them in and press "Go."

	3. Put the splashes you want displayed into the empty box it brings up. Each splash should be on it's own line. Don't forget 
to save your changes by clicking the "Save Changes" button. The box is empty because there is so far nothing in the text file. If you 
can't think of any splashes to add, try "Check it out!" and "Join the Crew!" and "Call your mother!" and "100% more yellow text!" Make sure you have at least 2.

	4. Any time you want add or change some splashes, just follow the steps layed out above.

8. Go back to your forum's index page and injoy. Don't forget to tell me what you think!


CHANGELOG
------------------------------------------------------------

1.0
-created splash.php
-created edit.php page, that is password protected by secure.php.
-self creating the text file needed for the splashes.
-created file.php to take a random splash from a text file.

TODO
------------------------------------------------------------

Add setting in Admin CP such as changing font.



Special thanks to the game Minecraft, which gave me the idea for this plugin.