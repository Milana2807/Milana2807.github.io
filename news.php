<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="стиль.css">
	<title>Новости</title>
</head>

<body>
	<div class="header"> <!--Шапка-->
		<div class="logo"> <!--Логотип-->
			<a href="index.php">
				<img src="images/logo.jpg" width="300" height="196"> 
			</a>
		</div>
		<div class="menu"> <!--Меню-->
			<ul>
			<li><a href="tovar.php">Товары</a></li>
				<li><a href="news.php">Новости</a></li>
				<li><a href="okomp.php">О компании</a></li>
				<?php if($_COOKIE['user'] == ''): ?>
				<li><a href="lich.php">Личный кабинет</a></li>
				<?php else: ?>
				<li><a href="learning_center/cart.php">Личный кабинет</a></li>
                <?php endif; ?>
				<li><a href="svyaz.php">Связаться с нами</a></li>
				<?php if($_COOKIE['user'] == ''): ?>
				<li><a href="regis.php">Регистрация/Вход</a></li>
                    <?php else: ?>
                   
					<li><a href="" style="font-weight: bold;"><?=$_COOKIE['user'] ?></a></li>
					<li><a href="php/logout.php" style="display: inline-block;">Выйти</a></li>
                  
                <?php endif; ?>
			</ul>
		</div>

		<a href="#" class="naverh"><img src="images/knopka.png" width="70px" height="70px"></a> <!--Кнопка "Наверх"-->
	
		<div class="tel"> <!--Кнопка для заказа звонка-->
			<a href="tel:+7(951)4870193">
				<img src="images/zvonok.png" width="60" height="60" alt="Изображение недоступно">
		</a>
	</div>

		<div class="korzina"> <!--Корзина-->
		<a href="learning_center/cart.php">
				<img src="images/korzina.png" width="60" height="60" alt="Изображение недоступно">
			</a>
		</div>
	</div>

	<div class="titletovar">Новости</div> <!--Заголовок "Новости"-->
	<div class="titletovar1">О букете невесты</div> <!--Блок "О букете невесты"-->
	<div class="picture">
		<img src="images/buketnevesti.jpg" alt="" width="550" height="600"></div>
		<div class="text2">
		Ответим на самые часто задаваемые вопросы:<br><br>
		<b>Он же маленький, почему он дороже, чем обычный букет на витрине?</b><br><br>
		Техника сборки букета невесты отличается от сборки стандартного коммерческого букета. В букете невесты точка сборки находится под головой цветка, что позволяет добиться именно шаровидной формы. Соответственно, для сохранения формы, цветок должен стоять плотно друг к другу, значит расход цветка возрастает и, чтобы на выходе получить красивый, плотный и крепкий букет невесты, мы тратим его намного больше. Оттуда и цена.
		Мы не делаем дополнительных наценок на букеты невест, мы просто тратим на него больше цветов<br><br>
		<b>Зачем в букете зелень? Я хочу, чтобы он был только из цветов</b><br><br>
		Букет невесты без зелени внутри собрать можно. Это желание невесты. НО низ букета обязательно должен быть закрыт зеленью, чтобы на фото, когда вы опустите букет вниз головой, не было видно голых стеблей цветов, что выглядит не эстетично.<br><br>
		<b>Почему я не могу заранее увидеть, что получится?</b><br><br>
		Букеты невест собираются накануне поздно вечером либо с самого утра перед торжеством, потому что цветы должны ночь простоять в специальном растворе кризала, чтобы весь день сохранять свою стойкость. Плюс цветы на букеты невест заказываются и привозятся индивидуально, перед самой свадьбой, с тем же умыслом: сохранность свежести и стойкости.<br><br>
		Дата публикации: 27 апреля 2021г.<br>
		Автор: Родина М.
		</div><br><br><br><br>
		

	<div class="titletovar1">О воздушных шарах с гелием</div> <!--Блок "О воздушных шарах с гелием"-->
	<div class="picture">
		<img src="images/osharah.jpg" alt="" width="550" height="650"></div>
		<div class="text3">
		Для того, чтобы шары радовали вас дольше, старайтесь <b>НЕ ДОПУСКАТЬ</b>:<br><br>
		контакта с загрязненными или запыленными поверхностями, сжатия шаров, истирания, царапания и прокалывания стенок шаров. Также, для шаров губительны: высокая или низкая температура воздуха (оптимальная 22-26 градусов), ветра, прямые солнечные лучи, дождь, высокая влажность воздуха. Все эти факторы действуют на улице, поэтому пребывание воздушных шаров вне помещений следует максимально сократить. Все надутые воздушные шары не предназначены для игр, и не могут служить игровыми предметами. Воздушные шары не трогают руками. Для перемещения шаров нужно использовать ленточку, к которой привязан гелиевый шарик. Гарантия и возврат денежных средств на воздушные шары не предусмотрены.<br><br>
		Дата публикации: 14 февраля 2022г.<br>
		Автор: Родина М.
	    </div>
</body>
</html>