<?php
  session_start();
  if (empty($_SESSION['mail'])) {
    header('HTTP/1.1 403 Forbidden');
    error_log('** LOGIN required **');
    die('ログインが必要です');
  }
  if (empty($_SERVER['HTTP_X_REQUESTED_WITH'])
     || $_SERVER['HTTP_X_REQUESTED_WITH'] !== 'XMLHttpRequest') {
    header('HTTP/1.1 403 Forbidden');
    error_log('** CSRF detected **');
    die('正規の経路から使用ください');
  }

