<?php

/*
Plugin Name: Social QR Code Scan Me Anywhere
Plugin URI: http://patrick.bloggles.info/2012/09/18/hide-your-qr-code/
Description: Automatic generate Quick Response Code (QR) for your blog and allowed user quickly scan the QR code and find out more information about your website.
Version: 3.0
Author: Patrick Chia
Author URI: http://patrickchia.com/
License: GPLv2
Donate: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=mypatricks@gmail.com&item_name=Donate%20to%20Patrick%20Chia&item_number=1242543308&amount=3.00&no_shipping=0&no_note=1&tax=0&currency_code=USD&bn=PP%2dDonationsBF&charset=UTF%2d8&return=http://patrick.bloggles.info/ 
*/



/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

define('SOCIALQR_VERSION', '3.0');
define('SOCIALQR_PLUGIN_URL', plugin_dir_url( __FILE__ ));


function scanme_head(){
	if (function_exists('is_mobile')) {
 		if ( is_mobile() )
			return;
	}

	if ( is_search() )
		return;

?>
<!-- Start Social QR Code Scan Me Anywhere 3.0 -->
<style type="text/css">
#q{display:block;padding:0px;margin:0;position:fixed;width:254px;bottom:0;right:110px;z-index:9999;}
#qrcode-s:hover{filter:alpha(opacity=90);-moz-opacity:0.9;-khtml-opacity: 0.9;opacity: 0.9;}
.shadow{box-shadow: 0 0 8px #777;-webkit-box-shadow: 0 0 8px #777;-moz-box-shadow: 0 0 8px #7777;}
#qrcode-s{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/s.jpg'; ?>);background-repeat:no-repeat;background-position:15% 40%;background-size:12px 12px;display:block; width:90px;line-height:24px;float:right;padding-left:8px;text-align:center;background-color:#222;color:#ccc;text-decoration:none;font-size:12px;font-face:arial, helvetica;}
#q-h{background:#222;margin-top:24px;width:254px;max-height:472px;padding-top:20px;padding-bottom:5px;text-align:center;float:center;}#credit{display:block;line-height:24px;text-align:center;background-color:#222;color:#ccc;text-decoration:none;font-size:12px;font-face:arial;}#qrimg{filter:alpha(opacity=90);-moz-opacity:0.9;-khtml-opacity:0.9;opacity:0.9;}
a.gqr{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/g.jpg'; ?>);}
a.tqr{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/t.jpg'; ?>);}
a.fqr{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/f.jpg'; ?>);}
a.dqr{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/d.jpg'; ?>);}
a.deqr{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/de.jpg'; ?>);}
a.piqr{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/pi.jpg'; ?>);}
a.wpqr{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/wp.jpg'; ?>);}
a.iqr{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/i.jpg'; ?>);}
a.mqr{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/m.jpg'; ?>);}
a.wqr{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/w.jpg'; ?>);}
a.frqr{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/fr.jpg'; ?>);}
a.yqr{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/y.jpg'; ?>);}
a.stqr{background-image: url(<?php echo SOCIALQR_PLUGIN_URL .'img/st.jpg'; ?>);}
#sc{margin-left:18px;}
.square {float:left;width:42px;height:42px;display:block;overflow:hidden;margin-right:16px;margin-bottom:10px;margin-top:5px;border: solid 0px #fff;-moz-box-shadow:inset 0 0 8px #000000;-webkit-box-shadow: inset 0 0 8px #000000;box-shadow:inset 0 0 8px #000000;}
.grey{filter:alpha(opacity=30);-moz-opacity:0.3;-khtml-opacity: 0.3;opacity: 0.3;}.square:hover{filter:alpha(opacity=100);-moz-opacity:1;-khtml-opacity: 1;opacity: 1;}
</style>
<!-- End Social QR Code Scan Me Anywhere 3.0 -->
<?php

}

function scanme_footer(){
	if (function_exists('is_mobile')) {
 		if ( is_mobile() )
			return;
	}

	if ( is_search() )
		return;

		?>
<!-- Start Social QR Code Scan Me Anywhere 3.0 -->
<div id="q"><a id="qrcode-s" class="shadow" href="#"><?php echo __('Scan ME', 'scanme' ); ?></a><div id="q-h" class="shadow">
<div id="sc">
<?php if ( get_option('qr_gplus') || get_option('qr_twitter') || get_option('qr_facebook') )
	echo '<a class="dqr square grey" href="#" title="'. __('Scan ME', 'scanme') .'" rel="qrcode"></a>';
if ( get_option('qr_gplus') )
	echo '<a class="gqr square grey" href="https://plus.google.com/'.get_option('qr_gplus').'?rel=author" title="Find me on Google+" rel="qrcode"></a>';
if ( get_option('qr_twitter') )
	echo '<a class="tqr square grey" href="http://twitter.com/'.get_option('qr_twitter').'" title="Find me on Twitter" rel="qrcode"></a>';
if ( get_option('qr_facebook') )
	echo '<a class="fqr square grey" href="http://facebook.com/'.get_option('qr_facebook').'" title="Find me on Facebook" rel="qrcode"></a>';
if ( get_option('qr_weibo') )
	echo '<a class="wqr square grey" href="http://weibo.com/'.get_option('qr_weibo').'" title="Find me on Weibo" rel="qrcode"></a>';

if ( get_option('qr_youtube') )
	echo '<a class="yqr square grey" href="http://youtube.com/user/'.get_option('qr_youtube').'" title="Find me on Youtube" rel="qrcode"></a>';

if ( get_option('qr_myspace') )
	echo '<a class="mqr square grey" href="http://myspace.com/'.get_option('qr_myspace').'" title="Find me on mySpace" rel="qrcode"></a>';

if ( get_option('qr_wordpress') )
	echo '<a class="wpqr square grey" href="http://profiles.wordpress.org/'.get_option('qr_wordpress').'" title="Find me on WordPress" rel="qrcode"></a>';

if ( get_option('qr_pinterest') )
	echo '<a class="piqr square grey" href="http://pinterest.com/'.get_option('qr_myspace').'" title="Find me on Pinterest" rel="qrcode"></a>';

if ( get_option('qr_flickr') )
	echo '<a class="frqr square grey" href="http://flickr.com/photos/'.get_option('qr_flickr').'" title="Find me on flickr" rel="qrcode"></a>';

if ( get_option('qr_linkedin') )
	echo '<a class="iqr square grey" href="http://linkedin.com/in/'.get_option('qr_linkedin').'" title="Find me on Linkedin" rel="qrcode"></a>';

if ( get_option('qr_delicious') )
	echo '<a class="deqr square grey" href="http://delicious.com/'.get_option('qr_delicious').'" title="Find me on Delicious" rel="qrcode"></a>';

if ( get_option('qr_stumbleupon') )
	echo '<a class="stqr square grey" href="https://stumbleupon.com/stumbler/'.get_option('qr_stumbleupon').'" title="Find me on StumbleUpon" rel="qrcode"></a>';

?>
</div>
<img id="qrimg" src="" alt="Scan ME" title="<?php echo __('Scan this code from your phone right now.', 'scanme' ) ?>"/>
<?php if ( get_option('show_credit') )
	echo '<a id="credit" href="http://patrick.bloggles.info/" title="'. __('Scan ME powered by Patrick', 'scanme' ) .'">&copy; '. __('Scan ME powered by Patrick', 'scanme' ).'</a>';
?>
</div></div>
<!-- End Social QR Code Scan Me Anywhere 3.0 -->
<?php

}

function qrcode_js() {

	if (function_exists('is_mobile')) {
 		if ( is_mobile() )
			return;
	}

	if ( is_home() || is_single() || is_category() || is_tag() || is_archive() || is_page() ) {
		wp_enqueue_script(
			'qcode',
			SOCIALQR_PLUGIN_URL . 'social.qrcode.min.js',
			array('jquery')
		);
	}
}

add_action('wp_enqueue_scripts', 'qrcode_js');

add_action('wp_head', 'scanme_head' );
add_action('wp_footer', 'scanme_footer');


/* ------------------------------------------------------------------------ *
 * Setting Registration
 * ------------------------------------------------------------------------ */

add_action('admin_init', 'socialqr_options');

function socialqr_options() {
	// First, we register a section. This is necessary since all future options must belong to one.
	add_settings_section(
		'general_settings_section',			// ID used to identify this section and with which to register options
		__('Social QR Code Scan ME Options', 'scanme'),					// Title to be displayed on the administration page
		'socialqr_callback',	// Callback used to render the description of the section
		'general'							// Page on which to add this section of options
	);
	// Next, we will introduce the fields for toggling the visibility of content elements.
	add_settings_field(
		'show_credit',						// ID used to identify the field throughout the theme
		__('Credit Link', 'scanme'),							// The label to the left of the option interface element
		'show_credit_callback',	// The name of the function responsible for rendering the option interface
		'general',							// The page on which this option will be displayed
		'general_settings_section',			// The name of the section to which this field belongs
		array(								// The array of arguments to pass to the callback. In this case, just a description.
			__('Show plugin developers credit links. (I\'ll highly appreciate if you can keep the credit link)', 'scanme' )
		)
	);
	add_settings_field(
		'qr_gplus',
		__('Google+ Profile ID', 'scanme'),
		'gplus_callback',
		'general',
		'general_settings_section',
		array(
			__('Your Google+ Profile ID, like https://plus.google.com/profile_id', 'scanme' )
		)
	);
	add_settings_field(
		'qr_twitter',
		__('Twitter User ID', 'scanme'),
		'twitter_callback',
		'general',
		'general_settings_section',
		array(
			__('Your Twitter User ID, like http://twitter.com/your_id', 'scanme' )
		)
	);

	add_settings_field(
		'qr_facebook',
		__('Facebook User ID', 'scanme'),
		'facebook_callback',
		'general',
		'general_settings_section',
		array(
			__('Your Facebook User ID, like http://facebook.com/your_id', 'scanme' )
		)
	);

	add_settings_field(
		'qr_youtube',
		__('Youtube Profiles ID', 'scanme'),
		'youtube_callback',
		'general',
		'general_settings_section',
		array(
			__('Your Youtube Profiles ID, like http://www.youtube.com/user/your_id', 'scanme' )
		)
	);

	add_settings_field(
		'qr_weibo',
		__('Weibo User ID', 'scanme'),
		'weibo_callback',
		'general',
		'general_settings_section',
		array(
			__('Your Sina Weibo User ID, like http://www.weibo.com/your_id', 'scanme' )
		)
	);

	add_settings_field(
		'qr_myspace',
		__('Myspace Profile ID', 'scanme'),
		'myspace_callback',
		'general',
		'general_settings_section',
		array(
			__('Your Myspace Profile ID, like http://myspace.com/your_id', 'scanme' )
		)
	);

	add_settings_field(
		'qr_pinterest',
		__('Pinterest Profile ID', 'scanme'),
		'pinterest_callback',
		'general',
		'general_settings_section',
		array(
			__('Your Pinterest Profile ID, like http://pinterest.com/your_id', 'scanme' )
		)
	);

	add_settings_field(
		'qr_flickr',
		__('Flickr Profile ID', 'scanme'),
		'flickr_callback',
		'general',
		'general_settings_section',
		array(
			__('Your flickr Profile ID, like http://www.flickr.com/photos/your_id', 'scanme' )
		)
	);

	add_settings_field(
		'qr_wordpress',
		__('WordPress Profile ID', 'scanme'),
		'wordpress_callback',
		'general',
		'general_settings_section',
		array(
			__('Your WordPress Profile ID, like http://profiles.wordpress.org/your_id/', 'scanme' )
		)
	);

	add_settings_field(
		'qr_linkedin',
		__('LinkedIn Profile ID', 'scanme'),
		'linkedin_callback',
		'general',
		'general_settings_section',
		array(
			__('Your LinkedIn Profile ID, like http://www.linkedin.com/in/your_id', 'scanme' )
		)
	);

	add_settings_field(
		'qr_delicious',
		__('Delicious Profile ID', 'scanme'),
		'delicious_callback',
		'general',
		'general_settings_section',
		array(
			__('Your Delicious Profile ID, like http://delicious.com/your_id', 'scanme' )
		)
	);
	add_settings_field(
		'qr_stumbleupon',
		__('Stumbleupon Profile ID', 'scanme'),
		'stumbleupon_callback',
		'general',
		'general_settings_section',
		array(
			__('Your Stumbleupon Profile ID, like https://www.stumbleupon.com/stumbler/your_id', 'scanme' )
		)
	);

	register_setting(
		'general',
		'show_credit'
	);
	register_setting(
		'general',
		'qr_gplus'
	);
	register_setting(
		'general',
		'qr_twitter'
	);
	register_setting(
		'general',
		'qr_facebook'
	);
	register_setting(
		'general',
		'qr_youtube'
	);
	register_setting(
		'general',
		'qr_weibo'
	);
	register_setting(
		'general',
		'qr_myspace'
	);
	register_setting(
		'general',
		'qr_pinterest'
	);

	register_setting(
		'general',
		'qr_flickr'
	);
	register_setting(
		'general',
		'qr_wordpress'
	);
	register_setting(
		'general',
		'qr_linkedin'
	);
	register_setting(
		'general',
		'qr_delicious'
	);
	register_setting(
		'general',
		'qr_stumbleupon'
	);
}
/* ------------------------------------------------------------------------ *
 * Section Callbacks
 * ------------------------------------------------------------------------ */

function socialqr_callback() {
	echo '<p>'. __('In order to enable QR code for your Social network, please fill in your social account id.', 'scanme' ) .'</p>';
} // end sandbox_general_options_callback
/* ------------------------------------------------------------------------ *
 * Field Callbacks
 * ------------------------------------------------------------------------ */

function show_credit_callback($args) {
	$html = '<label for="show_credit"><input type="checkbox" id="show_credit" name="show_credit" value="1" ' . checked(1, get_option('show_credit'), false) . '/>';
	$html .= ' '  . $args[0] . '</label>';
	echo $html;
}
function gplus_callback($args) {
	$html = '<input id="qr_gplus" name="qr_gplus" type="text" value="'. get_option('qr_gplus') .'" class="regular-text code" />';
	$html .= '<p class="description">'  . $args[0] . '</p>';
	echo $html;
}
function twitter_callback($args) {
	$html = '<input id="qr_twitter" name="qr_twitter" type="text" value="'. get_option('qr_twitter') .'" class="regular-text code" />';
	$html .= '<p class="description">'  . $args[0] . '</p>';
	echo $html;
}
function facebook_callback($args) {
	$html = '<input id="qr_facebook" name="qr_facebook" type="text" value="'. get_option('qr_facebook') .'" class="regular-text code" />';
	$html .= '<p class="description">'  . $args[0] . '</p>';
	echo $html;
}

function youtube_callback($args) {
	$html = '<input id="qr_youtube" name="qr_youtube" type="text" value="'. get_option('qr_youtube') .'" class="regular-text code" />';
	$html .= '<p class="description">'  . $args[0] . '</p>';
	echo $html;
}
function wordpress_callback($args) {
	$html = '<input id="qr_wordpress" name="qr_wordpress" type="text" value="'. get_option('qr_wordpress') .'" class="regular-text code" />';
	$html .= '<p class="description">'  . $args[0] . '</p>';
	echo $html;
}
function pinterest_callback($args) {
	$html = '<input id="qr_pinterest" name="qr_pinterest" type="text" value="'. get_option('qr_pinterest') .'" class="regular-text code" />';
	$html .= '<p class="description">'  . $args[0] . '</p>';
	echo $html;
}

function delicious_callback($args) {
	$html = '<input id="qr_delicious" name="qr_delicious" type="text" value="'. get_option('qr_delicious') .'" class="regular-text code" />';
	$html .= '<p class="description">'  . $args[0] . '</p>';
	echo $html;
}
function linkedin_callback($args) {
	$html = '<input id="qr_linkedin" name="qr_linkedin" type="text" value="'. get_option('qr_linkedin') .'" class="regular-text code" />';
	$html .= '<p class="description">'  . $args[0] . '</p>';
	echo $html;
}
function weibo_callback($args) {
	$html = '<input id="qr_weibo" name="qr_weibo" type="text" value="'. get_option('qr_weibo') .'" class="regular-text code" />';
	$html .= '<p class="description">'  . $args[0] . '</p>';
	echo $html;
}

function myspace_callback($args) {
	$html = '<input id="qr_myspace" name="qr_myspace" type="text" value="'. get_option('qr_myspace') .'" class="regular-text code" />';
	$html .= '<p class="description">'  . $args[0] . '</p>';
	echo $html;
}
function flickr_callback($args) {
	$html = '<input id="qr_flickr" name="qr_flickr" type="text" value="'. get_option('qr_flickr') .'" class="regular-text code" />';
	$html .= '<p class="description">'  . $args[0] . '</p>';
	echo $html;
}
function stumbleupon_callback($args) {
	$html = '<input id="qr_stumbleupon" name="qr_stumbleupon" type="text" value="'. get_option('qr_stumbleupon') .'" class="regular-text code" />';
	$html .= '<p class="description">'  . $args[0] . '</p>';
	echo $html;
}