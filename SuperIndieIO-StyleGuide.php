<?php
/*
* Plugin Name: SuperIndieIO Style Guide
* Description: In-Editor Style Guide
* Version: 1.0
* Author: ADeanKelly
* Author URI: http://adeankelly.com
*/

function shortcode_meta() {
    add_meta_box( 'prfx_meta', __( 'SuperIndieIO Style Guide', 'prfx-textdomain' ), 'si_meta_callback', 'post', 'side', 'default' );
}
add_action( 'add_meta_boxes', 'shortcode_meta' );

function si_meta_callback( $post ) {
    echo 'Use This Style Guide';
    ?>
    <br><br>
    <?php echo '[VIDEO] - Use for articles with video'; ?>
    <br>
    <?php echo '[TRAILER] - Use for articles with a trailer'; ?>
    <br><br>
    <?php echo 'To embed a video in a post use -'; ?>
    <br>
    <?php echo "&#60;div class='embed-container'>";
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