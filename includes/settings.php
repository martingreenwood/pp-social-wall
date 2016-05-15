<?php
if( !defined( 'ABSPATH' ) ) {
	exit;
}

$this->pp_social_wall = get_option( 'pp_social_wall_option_name' ); ?>

<style> .indent {padding-left: 2em} </style>

<div class="wrap">
	
	<h1><?php _e( 'PP Social Wall', 'pp-social-wall') ?></h1>
	
	<form action="options.php" method="post" id="pp-social-wall">
	<?php settings_fields( 'pp_social_wall_option_group' ); ?>	
		<fieldset>

			<ul>

				<li>
					<h3>General Settings</h3>
					<p>General settings for the social wall. Use the shortcode <code>[pp_social_wall]</code> to display the social wall there you would like. for those developers<br>
					you should be able to use <code>do_shortcode('[pp_social_wall]');</code></p>
					<?php
					do_settings_sections( 'ppsw-admin' );
					?>

				</li>

				<li>
					<h3>Facebook Settings</h3>
					<p>Please add your facebook app info below.</p>
					<?php
					do_settings_sections( 'ppsw-facebook' );
					?>
				</li>

				<li>
					<h3>Twitter Settings</h3>
					<p>Please add your twitter app info below.</p>
					<?php
					do_settings_sections( 'ppsw-twitter' );
					?>

				</li>

				<li>
					<h3>Instagram Settings</h3>
					<p>Please add your instagram app info below.</p>
					<?php
					do_settings_sections( 'ppsw-instagram' );
					?>
				</li>

			</ul>

		</fieldset>

		<p class="submit">
			<?php submit_button(); ?>
		</p>

	</form>

</div>
