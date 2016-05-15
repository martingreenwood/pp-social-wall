<?php
if( !defined( 'ABSPATH' ) ) {
	exit;
}

register_setting(
    'pp_social_wall_option_group',					// option_group
    'pp_social_wall_option_name',					// option_name
    array( $this, 'pp_social_wall_sanitize' )		// sanitize_callback
);

add_settings_section(
    'pp_social_wall_setting_section',				// id
    '',												// title
    '',												// callback
    'ppsw-admin'									// page
);

add_settings_section(
    'pp_social_wall_twitter_section',				// id
    '',												// title
    '',												// callback
    'ppsw-twitter'									// page
);

add_settings_section(
    'pp_social_wall_facebook_section',              // id
    '',                                             // title
    '',                                             // callback
    'ppsw-facebook'                                 // page
);
add_settings_section(
    'pp_social_wall_instagram_section',             // id
    '',                                             // title
    '',                                             // callback
    'ppsw-instagram'                                // page
);

/*
 * Wall Fields
 */
add_settings_field(
    'ppsw_main_title', 								// id
    'Social Wall Title', 							// title
    array( $this, 'ppsw_main_title_cb' ), 			// callback
    'ppsw-admin', 					                // page
    'pp_social_wall_setting_section' 				// section
);

add_settings_field(
    'ppsw_main_tagline',                            // id
    'Social Wall Tagline',                          // title
    array( $this, 'ppsw_main_tagline_cb' ),         // callback
    'ppsw-admin',                                   // page
    'pp_social_wall_setting_section'                // section
);

add_settings_field(
    'ppsw_main_hashtag',                            // id
    'Social Wall Hashtag',                          // title
    array( $this, 'ppsw_main_hashtag_cb' ),         // callback
    'ppsw-admin',                                   // page
    'pp_social_wall_setting_section'                // section
);

add_settings_field(
    'ppsw_font_awesome',                            // id
    'Enable Font Awesome',                          // title
    array( $this, 'ppsw_font_awesome_cb' ),         // callback
    'ppsw-admin',                                   // page
    'pp_social_wall_setting_section'                // section
);

/*
 * Instgram Fields
 */
add_settings_field(
    'ppsw_ig_id',                                    // id
    'Instagram ID',                                  // title
    array( $this, 'ppsw_ig_id_cb' ),                 // callback
    'ppsw-instagram',                                 // page
    'pp_social_wall_instagram_section'               // section
);
add_settings_field(
    'ppsw_ig_token',                                 // id
    'Instagram Access Token',                                  // title
    array( $this, 'ppsw_ig_token_cb' ),              // callback
    'ppsw-instagram',                                 // page
    'pp_social_wall_instagram_section'               // section
);

/*
 * Facebook Fields
 */
add_settings_field(
    'ppsw_fb_page_id',                              // id
    'Facebook Page ID',                             // title
    array( $this, 'ppsw_fb_page_id_cb' ),           // callback
    'ppsw-facebook',                                // page
    'pp_social_wall_facebook_section'               // section
);
add_settings_field(
    'ppsw_fb_app_id', 								// id
    'Facebook App ID', 								// title
    array( $this, 'ppsw_fb_app_id_cb' ), 			// callback
    'ppsw-facebook', 								// page
    'pp_social_wall_facebook_section' 				// section
);
add_settings_field(
    'ppsw_fb_app_sekret', 							// id
    'Facebook App Secret', 							// title
    array( $this, 'ppsw_fb_app_sekret_cb' ), 		// callback
    'ppsw-facebook', 								// page
    'pp_social_wall_facebook_section' 				// section
);
add_settings_field(
    'ppsw_fb_album_id', 							// id
    'Facebook Album ID', 							// title
    array( $this, 'ppsw_fb_album_id_cb' ), 			// callback
    'ppsw-facebook', 								// page
    'pp_social_wall_facebook_section' 				// section
);
add_settings_field(
    'ppsw_fb_acces_token', 							// id
    'Facebook Long Term Access Token', 				// title
    array( $this, 'ppsw_fb_acces_token_cb' ), 			// callback
    'ppsw-facebook', 								// page
    'pp_social_wall_facebook_section' 				// section
);


/*
 * Twitter Fields
 */
add_settings_field(
    'ppsw_twiter_username', 						// id
    'Twitter Username', 							// title
    array( $this, 'ppsw_twiter_username_cb' ), 		// callback
    'ppsw-twitter', 								// page
    'pp_social_wall_twitter_section' 				// section
);
add_settings_field(
    'ppsw_twiter_no_of_tweets', 						// id
    'Number of Tweets', 								// title
    array( $this, 'ppsw_twiter_no_of_tweets_cb' ), 		// callback
    'ppsw-twitter', 									// page
    'pp_social_wall_twitter_section' 					// section
);
add_settings_field(
    'ppsw_twiter_consumer_key', 						// id
    'Consumer Key', 									// title
    array( $this, 'ppsw_twiter_consumer_key_cb' ), 		// callback
    'ppsw-twitter', 									// page
    'pp_social_wall_twitter_section' 					// section
);
add_settings_field(	
    'ppsw_twiter_consumer_sekret', 						// id
    'Consumer Secret',						 			// title
    array( $this, 'ppsw_twiter_consumer_sekret_cb' ), 	// callback
    'ppsw-twitter', 									// page
    'pp_social_wall_twitter_section' 					// section
);
add_settings_field(
    'ppsw_twiter_access_token', 						// id
    'Access Token', 									// title
    array( $this, 'ppsw_twiter_access_token_cb' ), 		// callback
    'ppsw-twitter', 									// page
    'pp_social_wall_twitter_section' 					// section
);
add_settings_field(
    'ppsw_twiter_access_sekret',                        // id
    'Access Secret',                                    // title
    array( $this, 'ppsw_twiter_access_sekret_cb' ),     // callback
    'ppsw-twitter',                                     // page
    'pp_social_wall_twitter_section'                    // section
);
add_settings_field(
    'ppsw_twiter_widget_id',                            // id
    'Twitter Widget ID',                                    // title
    array( $this, 'ppsw_twiter_widget_id_cp' ),         // callback
    'ppsw-twitter',                                     // page
    'pp_social_wall_twitter_section'                    // section
);