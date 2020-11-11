<!DOCTYPE html>
<html lang="ru" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
		<title>Iphone case</title>
	</head>
	<body>
		<?php require "blocks/header.php" ?>
  <div class="container mt-5">
     <h3>Наш каталог</h3>
		 <div class="d-flex flex-wrap">
     <?php
        for ($i=0; $i<6; $i++):
        ?>
     <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Чехол Silicone Case</h4>
      </div>
      <div class="card-body">
				<img src="img/<?php echo ($i+1) ?>.jpg" alt="Case" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Цена 200 грн</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Детальная информация</button>
      </div>
    </div>
  <?php endfor; ?>
</div>
  </div>
	<?php require "blocks/footer.php" ?>
	</body>
</html>
