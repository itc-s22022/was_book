<?php
	session_start();
	$id = filter_input(INPUT_GET, 'id');
	if (empty($id)) $id = 'yamada';
	$_SESSION['id'] = $id;
?><body>
<form action="45-005.php" method="post" enctype="multipart/form-data">
ファイル:<input type="file" name="imgfile" size="20"><br>
<input type="submit" value="アップロード">
</form>
</body>
