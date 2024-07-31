<?php
  function ex($s) { // XSS対策用のHTMLエスケープと表示関数
    echo htmlspecialchars($s, ENT_COMPAT, 'UTF-8');
  }
  session_start();
  $id = @$_SESSION['id']; // ユーザIDの取り出し
  $pwd = filter_input(INPUT_POST, 'pwd');   // パスワードの取得
?>
<body>
<?php ex($id); ?>さんのパスワードを<?php ex($pwd); ?>に変更しました
</body>

