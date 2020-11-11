<!DOCTYPE html>
<html lang="ru" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
		<title>Контактная информация</title>
	</head>
	<body>
    <?php require "blocks/header.php" ?>
    <div class="container mt-5">
    <h3>Контактная информация</h3>
    <form  action="check.php" method="post">
      <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
      <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
      <button type="submit" name="send" class="btn btn-success" >Отправить</button><br>
    </form>
  </div>
    <?php require "blocks/footer.php" ?>
  </body>
  </html>
