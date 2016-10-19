<?php
/**
 * alwizo enqueue scripts
 *
 * @package alwizo
 */

function alwizo_scripts() {
    wp_enqueue_style( 'alwizo-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), '0.4.7');
    wp_enqueue_script('jquery'); 
    wp_enqueue_script( 'alwizo-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), '0.4.7', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'alwizo_scripts' );

/** 
*Loading slider script conditionally
**/

if ( is_active_sidebar( 'hero' ) ):
add_action("wp_enqueue_scripts","alwizo_slider");
  
function alwizo_slider(){
    if ( is_front_page() ) {    
    $data = array(
        "timeout"=> intval( get_theme_mod( 'alwizo_theme_slider_time_setting', 10000 )),
        "items"=> intval( get_theme_mod( 'alwizo_theme_slider_count_setting', 1 ))
    	);

    wp_enqueue_script("alwizo-slider-script", get_stylesheet_directory_uri() . '/js/slider_settings.js', array(), '0.4.7');
    wp_localize_script( "alwizo-slider-script", "alwizo_slider_variables", $data );
    }
}
endif;

/**
 *Ajax contact form
 **/

add_action ( 'wp_enqueue_scripts', 'myajax_data', 99 );

function myajax_data(){
    wp_localize_script( 'alwizo-scripts', 'myajax',
        array(
            'url' => admin_url( 'admin-ajax.php' ),
	        'nonce' => wp_create_nonce('myajax-nonce')
        )
    );
};

add_action('wp_footer', 'my_action_javascript', 99);
function my_action_javascript() {
	?>
	<script type="text/javascript" >
		jQuery(document).ready(function($) {

			$('#go').click(function () {

				var country = $('#country').attr('value');
				var email = $('#email').attr('value');

				var data = {
				    dataType: 'json',
					action: 'my_action',
					nonce : myajax.nonce,
					country: country,
                    email: email
				};

				jQuery.post( myajax.url, data, function() {
                    $('#country2').attr('value', data.country);
                    $('#email2').attr('value', data.email);
				});
			});

            $("#contactForm").submit(function(event){
                event.preventDefault();
                submitForm();
            });

            function submitForm(){
                var name = $("#name").val();
                var email2 = $("#email2").val();
                var phone = $("#phone").val();
                var country2 = $("#country2").val();
                var message = $("#message").val();

                var data = {
                    /*dataType: 'json',*/
                    action: 'my_action2',
                    nonce : myajax.nonce,
                    name: name,
                    country2: country2,
                    email2: email2,
                    phone: phone,
                    message: message
                };

                jQuery.post( myajax.url, data, function(response) {
                    if(response){
                        $( "#msgSubmit" ).removeClass( "hidden" );
                    }
                });
            }
            function formSuccess(){

            }
		});
	</script>
	<?php
}

add_action('wp_ajax_my_action', 'my_action_callback');
add_action('wp_ajax_nopriv_my_action', 'my_action_callback');

function my_action_callback() {

	$nonce = $_POST['nonce'];

	if ( ! wp_verify_nonce( $nonce, 'myajax-nonce' ) )
		die ( 'Stop!');

	$country = $_POST['country'];
	$email = $_POST['email'];
    $array = array('country' => $country, 'email' => $email);
	print json_encode($array);

	wp_die();
}


add_action('wp_ajax_my_action2', 'my_action_callback2');
add_action('wp_ajax_nopriv_my_action2', 'my_action_callback2');

function my_action_callback2 () {

    $nonce = $_POST['nonce'];

    if ( ! wp_verify_nonce( $nonce, 'myajax-nonce' ) )
        die ( 'Stop!');

    $name = $_POST["name"];
    $email2 = $_POST["email2"];
    $phone = $_POST['phone'];
    $country2 = $_POST["country2"];
    $message = $_POST["message"];

    $EmailTo = "zootovar@gmail.com";
    $Subject = "New Message Received";

// prepare email body text
    $Body  = "Имя: ";
    $Body .= $name;
    $Body .= "\n";

    $Body .= "Email: ";
    $Body .= $email2;
    $Body .= "\n";

    $Body .= "Телефон: ";
    $Body .= $phone;
    $Body .= "\n";

    $Body .= "Страна отдыха: ";
    $Body .= $country2;
    $Body .= "\n";

    $Body .= "Message: ";
    $Body .= $message;
    $Body .= "\n";

    $success = wp_mail($EmailTo, $Subject, $Body, "From:".$email2);

    if ($success){
        echo 'success';
    }else{
        echo "invalid";
    }

}


