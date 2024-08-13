<?php
  if (empty($_COOKIE['CSRF_TOKEN'])) { // トークンがなければ生成する
    $token = bin2hex(openssl_random_pseudo_bytes(24));
    setcookie('CSRF_TOKEN', $token);
  }

