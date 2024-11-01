<?php 
	if($_POST['socialssidebar_hidden'] == 'Y') {
		//Form data sent
		$twitter = $_POST['socialssidebar_twitter'];
		update_option('socialssidebar_twitter', $twitter);
		
		$facebook = $_POST['socialssidebar_facebook'];
		update_option('socialssidebar_facebook', $facebook);
		
		$googleplus = $_POST['socialssidebar_googleplus'];
		update_option('socialssidebar_googleplus', $googleplus);
		
		$linkedin = $_POST['socialssidebar_linkedin'];
		update_option('socialssidebar_linkedin', $linkedin);

		$youtube = $_POST['socialssidebar_youtube'];
		update_option('socialssidebar_youtube', $youtube);

		$vimeo = $_POST['socialssidebar_vimeo'];
		update_option('socialssidebar_vimeo', $vimeo);
		
		$rss = $_POST['socialssidebar_rss'];
		update_option('socialssidebar_rss', $rss);
		
		?>
		<div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
		<?php
	} else {
		//Normal page display
		$twitter = get_option('socialssidebar_twitter');
		$facebook = get_option('socialssidebar_facebook');
		$googleplus = get_option('socialssidebar_googleplus');
		$linkedin = get_option('socialssidebar_linkedin');
		$youtube = get_option('socialssidebar_youtube');
		$vimeo = get_option('socialssidebar_vimeo');
		$rss = get_option('socialssidebar_rss');
	}
	
	
?>

<div class="wrap">
<?php    echo "<h2>" . __( 'Socials Sidebar Settings', 'socialssidebar_trdom' ) . "</h2>"; ?>

<form name="socialssidebar_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="socialssidebar_hidden" value="Y">
	<?php    echo "<h4>" . __( 'inclue your social media sites bellow. Any left blank will not display in widget', 'socialssidebar_trdom' ) . "</h4>"; ?>
	<p><?php _e("Twitter Username: " ); ?><input type="text" name="socialssidebar_twitter" value="<?php echo $twitter; ?>" size="20"></p>
	<p><?php _e("Facebook URL: " ); ?><input type="text" name="socialssidebar_facebook" value="<?php echo $facebook; ?>" size="40"></p>
	<p><?php _e("Google+ URL: " ); ?><input type="text" name="socialssidebar_googleplus" value="<?php echo $googleplus; ?>" size="40"></p>
	<p><?php _e("Linkedin URL: " ); ?><input type="text" name="socialssidebar_linkedin" value="<?php echo $linkedin; ?>" size="40"></p>
	<p><?php _e("Vimeo URL: " ); ?><input type="text" name="socialssidebar_vimeo" value="<?php echo $vimeo; ?>" size="40"></p>
	<p><?php _e("Youtube URL: " ); ?><input type="text" name="socialssidebar_youtube" value="<?php echo $youtube; ?>" size="40"></p>
	<p><?php _e("RSS Feed: " ); ?><input type="text" name="socialssidebar_rss" value="<?php echo $rss; ?>" size="40"></p>
	<p>if you need help with the rss feed visit <a href="http://codex.wordpress.org/WordPress_Feeds" target="_blank>">here</a></p>


	<p class="submit">
	<input type="submit" name="Submit" value="<?php _e('Update Options', 'socialssidebar_trdom' ) ?>" />
	</p>
</form>
</div>