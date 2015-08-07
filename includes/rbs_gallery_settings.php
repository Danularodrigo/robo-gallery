<?php 
/*
*      Robo Gallery     
*      Version: 1.2
*      By Robosoft
*
*      Contact: http://robosoft.co
*      Created: 2015
*      Licensed under the GPLv2 license - http://opensource.org/licenses/gpl-2.0.php
*
*      Copyright (c) 2014-2015, Robosoft. All rights reserved.
*      Available only in http://robosoft.co/
*/
wp_enqueue_style ( 	'toolbox-gallery-about', ROBO_GALLERY_URL.'css/admin/about.css', array( ), ROBO_GALLERY_VERSION );
?>
<div class="wrap">
	<h2><?php _e('General Settings', 'rbs_gallery'); ?></h2>

	<form method="post" action="options.php" novalidate="novalidate">
		<?php 
		settings_fields( 'rbs_gallery_settings' ); 
		do_settings_sections( 'rbs_gallery_settings' ); 
		 ?>


		<table class="form-table">
			

			<tr>
			<th scope="row"><?php _e('jQuery Version', 'rbs_gallery'); ?></th>
			<td>
				<fieldset>
					<legend class="screen-reader-text"><span><?php _e('jQuery Version', 'rbs_gallery'); ?></span></legend>
					<label title='<?php _e('Default', 'rbs_gallery'); ?>'>
						<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'jqueryVersion'; ?>' value='build' <?php if( get_option(ROBO_GALLERY_PREFIX.'jqueryVersion', 'build')=='build' ) echo " checked='checked'";?> /> <?php _e('Default', 'rbs_gallery'); ?>
					</label><br />
					<label title='<?php _e('Alternative', 'rbs_gallery'); ?>'>
						<input type='radio' name='<?php echo ROBO_GALLERY_PREFIX.'jqueryVersion'; ?>' value='robo' <?php if( get_option(ROBO_GALLERY_PREFIX.'jqueryVersion')=='robo' ) echo " checked='checked'";?>  /> <?php _e('Alternative', 'rbs_gallery'); ?>
					</label><br />			
				</fieldset>
			</td>
			</tr>
		</table>

	<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"  /></p></form>

</div>
<?php 
echo '<div class="rbs_about_string2">Copyright &copy; 2014 - 2015 RoboSoft '.__('All Rights Reserved', 'rbs_gallery').'.</div>
';