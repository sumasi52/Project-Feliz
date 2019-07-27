<?php
session_start();
?>

<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "UFT-8">
<title>mission1-7</title>
</head>
<body>
<h1>編集フォーム</h1>
編集ボタンを押すと以下の内容で上書きされます。<br>
<form action = "mission_2-5.php"method =
"post">
<input type = "text"name = "name", "text" value = "<?php echo $_SESSION['name'];?>">
<br/>
<input type = "text"name = "comment" style="width: 300px;" , "text" value = "<?php echo $_SESSION['comment'];?>">
<br/>
パスワード&nbsp;<input type = "password"name = "editpass" style="width: 80px;" , "text" value = "<?php echo $_SESSION['editpass'];?>">
<input type="hidden" name="edit_flug" value= "<?php echo $_SESSION['editnum'];?>">
<br/>
<input type = "submit" value = "編集">
</form>
</body>
</html>
<br/>



