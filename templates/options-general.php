<div class="wrap">
	<h1><?php _e('BeBetterHotels Shortcode Settings', 'bebetterhotels'); ?></h1>
	<form action="options.php" method="post">

		<?php settings_fields( 'bbh-options-group' ); ?>

		<h2><?php _e('Fields Settings', 'bebetterhotels'); ?></h2>

		<table class="form-table">
			<tr valign="top">
	            <th scope="row"><?php _e('Adults Field:', 'bebetterhotels'); ?></th>
	            <td>
	            	<select class="postform"
	            		name="bbh_adults_field" id="bbh_adults_field" >
						<option value="required" <?php selected( 'required', $data->options['adults_field'] ) ?>>
							<?php _e('required', 'bebetterhotels'); ?>
						</option>
						<option value="optional" <?php selected( 'optional', $data->options['adults_field'] ) ?>>
							<?php _e('optional', 'bebetterhotels'); ?>
						</option>
					</select>
	            </td>
	        </tr>
	        <tr valign="top">
	            <th scope="row"><?php _e('Childrens Field:', 'bebetterhotels'); ?></th>
	            <td>
	                <select class="postform"
	            		name="bbh_childrens_field" id="bbh_childrens_field" >
						<option value="required" <?php selected( 'required', $data->options['childrens_field'] ) ?>>
							<?php _e('required', 'bebetterhotels'); ?>
						</option>
						<option value="optional" <?php selected( 'optional', $data->options['childrens_field'] ) ?>>
							<?php _e('optional', 'bebetterhotels'); ?>
						</option>
					</select>
	            </td>
	        </tr>
	        <tr valign="top">
	            <th scope="row"><?php _e('Show Childrens Field:', 'bebetterhotels'); ?></th>
	            <td>
	                <select class="postform"
	            		name="bbh_show_childrens_field" id="bbh_show_childrens_field" >
	            		<option value="yes" <?php selected( 'yes', $data->options['show_childrens_field'] ) ?>>
	            			<?php _e('yes', 'bebetterhotels'); ?>
        				</option>
						<option value="no" <?php selected( 'no', $data->options['show_childrens_field'] ) ?>>
							<?php _e('no', 'bebetterhotels'); ?>
						</option>
					</select>
	            </td>
	        </tr>
    	</table>

		<h2><?php _e('Styles Settings', 'bebetterhotels'); ?></h2>

		<table class="form-table">
			<tr valign="top">
	            <th scope="row"><?php _e('Calendar Theme:', 'bebetterhotels'); ?></th>
	            <td>
	            	<select class="postform"
	            		name="bbh_calendar_theme" id="bbh_calendar_theme" >
	            		<?php foreach($data->themes as $theme): ?>
	            			<option value="<?=$theme?>" <?php selected( $theme, $data->options['calendar_theme'] ) ?>>
								<?=$theme?>
	            			</option>
	            		<?php endforeach ?>
					</select>
					<p class="description" id="themes-description">
						<?php _e('Which theme can I choose?', 'bebetterhotels'); ?>
						<?php
						printf(
					  		__(
						    	"You can see galleries examples <a href='%s' target='_blank'>here</a>",
						    	'bebetterhotels'
						  	),
					  		esc_url( 'https://jqueryui.com/themeroller/' )
						);?>
					</p>
	            </td>
	        </tr>
	        <tr valign="top">
	            <th scope="row"><?php _e('Button Border Color:', 'bebetterhotels'); ?></th>
	            <td>
	                <input type="text" name="bbh_button_border_color" class="regular-text color-field"
	                    value="<?php echo $data->options['button_border_color']; ?>" />
	            </td>
	        </tr>
	        <tr valign="top">
	            <th scope="row"><?php _e('Button Background Color:', 'bebetterhotels'); ?></th>
	            <td>
	                <input type="text" name="bbh_button_background_color" class="regular-text color-field"
	                    value="<?php echo $data->options['button_background_color']; ?>" />
	            </td>
	        </tr>
	        <tr valign="top">
	            <th scope="row"><?php _e('Button Text Color:', 'bebetterhotels'); ?></th>
	            <td>
	                <input type="text" name="bbh_button_text_color" class="regular-text color-field"
	                    value="<?php echo $data->options['button_text_color']; ?>" />
	            </td>
	        </tr>
    	</table>

    	<?php submit_button(); ?>
	</form>
</div>