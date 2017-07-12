<?php
/*
Plugin Name: Firebug Lite
Plugin URI:  http://linhost.org/projects/wordpress-plugins/firebug-lite/
Description: This plugin automatically add [Firebug Lite](http://getfirebug.com/lite.html) to your blog for the admin (> 7).
Author: ppalli
Author URI: http://linhost.org/
Version: 0.2
1. Unzip the file firebug-lite.php or the folder /firebug-lite/
2. Upload it in /wp-content/plugins/ of your Wordpress installation
3. Activate the Plugin
4. And that's it!
*/

add_action('wp_head', 'firebug_lite_script');

function firebug_lite_script() {
	global $current_user;
	get_currentuserinfo();
	
	
	if ($current_user->user_level >  7) { // if admin
		$firebugscript = "
		<!-- begin firebug lite scripts -->
		<script type='text/javascript' src='http://getfirebug.com/releases/lite/1.2/firebug-lite-compressed.js'></script>
		<!-- end firebug lite scripts -->\n";
		/* Output $firebugscript as text for our web pages: */
		echo($firebugscript); // echo Firebug script
	}
	else { // if no admin
	} // do nothing 
}

?>