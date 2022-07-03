<?php

function purr_captcha() {

  $captcha;

  if(isset($_POST['token'])){
    $captcha=$_POST['token'];
  } else {
    die();
  }

  $secretKey = "6LdBWnwaAAAAAPjLZfH7zq-NwP6OEopHKSLNfS31";
  $ip = $_SERVER['REMOTE_ADDR']; 
// post request to server

  $url =  'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey .  '&response=' . $_POST['token'];
  $response = file_get_contents($url);
  $responseKeys = json_decode($response,true);
  header('Content-type: application/json');
  if($responseKeys["success"] && $responseKeys["score"] >= 0.5) {
    return json_encode(array('success' => 'true', 'om_score' => $responseKeys["score"], 'token' => $_POST['token']));
  } else {
    return json_encode(array('success' => 'false', 'om_score' => $responseKeys["score"], 'token' => $_POST['token']));
  }
}

add_action( 'rest_api_init', function () {
  register_rest_route( 'purr/v1', '/captcha/', array(
          'methods'             => 'POST',
          'permission_callback' => '__return_true',
          'callback'            => 'purr_captcha'
  ) );
} );





