<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Add this lines to your config.php files end.

 /**
 * The reCAPTCHA server URL's
 */
$config['recaptcha']['apiserver']="http://www.google.com/recaptcha/api";
$config['recaptcha']['apisecureserver']="https://www.google.com/recaptcha/api";
$config['recaptcha']['verifyserver']="www.google.com";

$config['recaptcha']['publickey']="yourpublickey";
$config['recaptcha']['privatekey']="yourprivatekey";
$config['recaptcha']['language']="tr";//Interface Language
$config['recaptcha']['theme']="clean";//Interface Theme
$config['recaptcha']['mailhide']['publickey']="yourpublicemailhidekey";
$config['recaptcha']['mailhide']['privatekey']="yourprivateemailhidekey";