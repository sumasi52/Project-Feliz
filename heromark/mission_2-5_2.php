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
<h1>�폜�t�H�[��</h1>
�ȉ��̓��e���폜���܂��B��낵����΃p�X���[�h����͂��A�폜�{�^���������Ă��������B<br>
<form action = "mission_2-5.php"method =
"post">
�@�@�����O&nbsp;<input type = "text"name = "name", "text" value = "<?php echo $_SESSION['name'];?>"readonly>
<br/>
�@�R�����g&nbsp;<input type = "text"name = "comment" style="width: 300px;" , "text" value = "<?php echo $_SESSION['comment'];?>"readonly>
<br/>
�p�X���[�h&nbsp;<input type = "password"name = "delpass" style="width: 80px;" , "text" value = "<?php echo $_SESSION['delpass'];?>">
<input type="hidden" name="del_flug" value= "<?php echo $_SESSION['delnum'];?>">
<br/>
<input type = "submit" value = "�폜">
</form>
</body>
</html>
<br/>



