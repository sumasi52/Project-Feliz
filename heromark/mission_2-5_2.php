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
<h1>削除フォーム</h1>
以下の投稿を削除します。よろしければパスワードを入力し、削除ボタンを押してください。<br>
<form action = "mission_2-5.php"method =
"post">
　　お名前&nbsp;<input type = "text"name = "name", "text" value = "<?php echo $_SESSION['name'];?>"readonly>
<br/>
　コメント&nbsp;<input type = "text"name = "comment" style="width: 300px;" , "text" value = "<?php echo $_SESSION['comment'];?>"readonly>
<br/>
パスワード&nbsp;<input type = "password"name = "delpass" style="width: 80px;" , "text" value = "<?php echo $_SESSION['delpass'];?>">
<input type="hidden" name="del_flug" value= "<?php echo $_SESSION['delnum'];?>">
<br/>
<input type = "submit" value = "削除">
</form>
</body>
</html>
<br/>



