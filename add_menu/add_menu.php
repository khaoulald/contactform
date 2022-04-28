<?php 

/**
 * @package Hello_World
 * @version 1.4.3
 */
/*
Plugin Name: Formulaire de contact
Plugin URI: http://wordpress.org/plugins/Formlairedecontact/
Description: Ajouter un formulaire de contact a votre site .
Author: Omar Khaoula
Version: 1.4.3
Author URI: http://Ok.tt/
*/


function add_menu(){
    add_menu_page('Menu','My contact form','manage_options','add_menu','add_menu_main',1);
    
}


add_action('admin_menu','add_menu');
function add_menu_main(){

?>
<div><h1>ADD To YOURE CONTACT FORM</h1></div>
<div class='container'>
<form action='' method='POST'>
<input type="checkbox" name="firstname" <?php if (get_option("wp_contact_firstname")=="on") { echo"checked"; } ?>  >
<label id='label'>Nom</label> <br>
<input type='checkbox' name='lastname'<?php if (get_option("wp_contact_lastname")=="on") { echo"checked"; } ?>>
<label>Prenom</label>
<br>
<input id='input' type='checkbox' name='adress'<?php if (get_option("wp_contact_adress")=="on") { echo"checked"; } ?>>
<label>Adress</label> <br>
<input type='checkbox' name='phone'<?php if (get_option("wp_contact_phone")=="on") { echo"checked"; } ?> >
<label>Telephone</label> <br>
<input type='checkbox' name='city'<?php if (get_option("wp_contact_city")=="on") { echo"checked"; } ?> >
<label>Ville</label>
<br>
<input type='checkbox' name='email'<?php if (get_option("wp_contact_email")=="on") { echo"checked"; } ?> >
<label>Email</label>
<br>
<input type='checkbox' name='subject'<?php if (get_option("wp_contact_subject")=="on") { echo"checked"; } ?> >

<label>Sujet</label>
<br>
<input type='checkbox' name='message'<?php if (get_option("wp_contact_message")=="on") { echo"checked"; } ?>>
<label>Message</label>
<br>
<input class='btn' type='submit' name='submit' >
</form>
</div>

<?php
}

$firstname_option = "wp_contact_firstname";
$lastname_option = "wp_contact_lastname";
$adress_option = "wp_contact_adress";
$phone_option = "wp_contact_phone";
$city_option = "wp_contact_city";
$email_option = "wp_contact_email";
$subject_option = "wp_contact_subject";
$message_option = "wp_contact_message";
$firstname_value =  0;
$lastname_value = 0;
$adress_value =  0;
$phone_value =  0;
$city_value =  0;
$email_value = 0;
$subject_value =  0;
$message_value =  0;

if (isset($_POST["submit"])) { 
     
    if (isset($_POST['firstname'])) {
       $firstname_value =  $_POST['firstname'];
   }
    if (isset($_POST['lastname'])) {
    $lastname_value  =  $_POST['lastname'];
   }  
   if (isset($_POST['adress'])) {
    $adress_value =  $_POST['adress'];
   }  
    if (isset($_POST['phone'])) {
    $phone_value =  $_POST['phone'];
   }  
    if (isset($_POST['city'])) {
       $city_value =  $_POST['city'];
   }
    if (isset($_POST['email'])) {
       $email_value =  $_POST['email'];
   }  
    if (isset($_POST['subject'])) {
    $subject_value =  $_POST['subject'];
   }  
    if (isset($_POST['message'])) {
       $message_value =  $_POST['message'];
   }  
     update_option( $firstname_option,$firstname_value );
     update_option( $lastname_option,$lastname_value );
     update_option( $adress_option,$adress_value );
     update_option( $phone_option,$phone_value );
     update_option( $city_option,$city_value );
     update_option( $email_option,$email_value );
     update_option( $subject_option,$subject_value );
     update_option( $message_option,$message_value );
}  

function getShortcode(){
    if(get_option('wp_contact_firstname') == 'on'){
        echo ' <input type="text" placeholder = "first name">';
    }
    if(get_option('wp_contact_lastname') == 'on'){
        echo '<input type="text" placeholder = "last name">';
    }
    if(get_option('wp_contact_adress') == 'on'){
        echo ' <input type="text" placeholder = "Adress">';
    }
    if(get_option('wp_contact_phone') == 'on'){
        echo ' <input type="text" placeholder = "phone">';
    }
    if(get_option('wp_contact_city') == 'on'){
        echo '<input type="text" placeholder = "city">';
    }
    if(get_option('wp_contact_email') == 'on'){
        echo ' <input type="text" placeholder = "email">';
    }
    if(get_option('wp_contact_subject') == 'on'){
        echo ' <input type="text" placeholder = "subject">';
    }
    if(get_option('wp_contact_message') == 'on'){
        echo ' <input type="text" placeholder = "message">';
    }
    echo'<button>Submit</button>';
}

add_shortcode('input','getShortcode');
?>

<style>

    .btn{
        background-color: red;
        color: white;
        border-style: none;
        padding: 10px 20px;
        margin-top:20px;
        border-radius: 12px;
    }
    .btn:hover{
        background-color: black;
        color: white;
    }



</style>