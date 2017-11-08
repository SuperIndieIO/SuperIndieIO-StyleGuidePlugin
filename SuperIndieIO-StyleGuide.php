<?php
/*
* Plugin Name: SuperIndieIO Style Guide
* Description: In-Editor Style Guide
* Github Plugin URI: https://github.com/SuperIndieIO/SuperIndieIO-StyleGuidePlugin
* Version: 1.1.1
* Author: A. Dean Kelly
* Author URI: http://adeankelly.com
*/

function shortcode_meta() {
    add_meta_box( 'prfx_meta', __( 'SuperIndieIO Style Guide', 'prfx-textdomain' ), 'si_meta_callback', 'post', 'side', 'default' );
}
add_action( 'add_meta_boxes', 'shortcode_meta' );

function si_meta_callback( $post ) {
    echo 'Use This Guide for Styling Articles on SuperIndieIO';
    ?>
    <br><br>
    <?php echo '::Title Tagging Structure::'; ?>
    <br>
    <?php echo '[VIDEO] - Use for articles with video'; ?>
    <br>
    <?php echo '[WATCH] - Use for alternate articles with video'; ?>
    <br>
    <?php echo '[TRAILER] - Use for articles with a trailer'; ?>
    <br><br>
    <?php echo 'To embed a video in a post use -'; ?>
    <br>
    <?php echo "&#60;div class='embed-container'>";
}


add_action('wp_dashboard_setup', 'si_dashboard_widgets');
  
function si_dashboard_widgets() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'SuperIndieIO Content Schedule', 'si_dashboard');
}
 
function si_dashboard() {
echo '<p>Weekly Content Schedule on SuperIndieIO</p><p>[Monday] Screenshot Saturday Showcase</p><p>[Tuesday] Stand Out from the Crowd-Funding</p>';
}


function si_signup_form(){
?>
    <form>
        First name: <input type="text" name="firstname"><br>
        Last name: <input type="text" name="lastname"><br>
        Message: <textarea name="message"> Enter text here...</textarea>
    </form>
<?php
}

add_shortcode('si-signup', 'si_signup_form');

?>