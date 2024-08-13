  if (empty($_SESSION['token'])) { 
    $token = bin2hex(openssl_random_pseudo_bytes(24));
    $_SESSION['token'] = $token;
  }
  header('Content-Type: application/json; charset=UTF-8');
  $json = json_encode(array(
    'mail'   => $_SESSION['mail'],
    'token'  => $_SESSION['token']));
  echo $json;

