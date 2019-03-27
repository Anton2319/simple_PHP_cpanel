<?php
include '/cms/users/modules/user_read_permissions.php';
echo($ini_array);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<div class = "admin_body">
		<form action="articlecreate.php" method="post" class="article_create">
			<div class="head"><p>Панель управления </p><a href="/" target="_blank">сайтом</a></div>
			<div class="login">
					<input type="text" class="login" placeholder="Логин" name="login" /><br />
					<input type="password" class="login" placeholder="Пароль" name="pass" />
			</div>
			<p class="add_text">Добавить статью:</p>
			<input type="text" class="add_filename" name="addfilename" cols="40" placeholder="Имя файла статьи" /><br />
			<input placeholder="Заголовок статьи" type="text" class="add_header" name="header" cols="40" /><br />
			<textarea placeholder="Текст статьи" class="add_introtext" name="add_introtext"></textarea>
			<input type="submit" value="Подтвердить"/>
			<input type="reset" value="Очистить"/>
		</form>
		<div class="statistics_manager">
			<p>Статистика:</p>
			<form class="sort">
				<input type="button" value="По дням" class="dailystatistics" />
				<input type="button" value="По неделям" class="weeklystatistics" />
			</form>
		</div>
	</div>
</body>

</html>