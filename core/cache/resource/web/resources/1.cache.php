<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'Дмитрий Морозов - Front-end разработчик. Создание сайтов в Славянске, Краматорске.',
    'description' => 'Дмитрий Морозов Front-end разработчик. Создание сайтов в Славянске Краматорске Заказать разработку сайта Славянск Создать сайт визитка Славянск Разработать официальный сайт Славянск Сделать сайт каталог Славянск',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<!DOCTYPE html>
<html lang="ru">
<head>
	<title>[[*longtitle]]</title>
    <base href="[[!++site_url]]" />
    <meta charset="[[++modx_charset]]" />
	<meta name="keywords" content="dmitriy-morozov, Дмитрий Морозов, Dmitriy Morozov, веб-разработчик, создание сайтов в Славянске, Краматорск, лэндинг, визитка,разработать, сделать, купить, создать, заказать, создание, создать, разработку, веб, web, студия, студии, дизайн, интернет, сайт, сайта, сайтов, славянск, в славянске">
	<meta name="description" content="[[*description]]"/>
	<meta name="author" content="Dmitriy Morozov">
	<meta name="robots" content="index, follow">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.css" rel="stylesheet">
	<!-- Custom styles CSS -->
	<link href="assets/css/style.min.css" rel="stylesheet" media="screen">
	<script src="assets/js/modernizr.custom.js"></script>


<!-- 2. Подключим jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


</head>
<body>


	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	<!-- Home start -->
	<section id="home" class="pfblock-image screen-height b-page b-page_holiday-face b-page_holiday-bg_2">
		<div data-id="1" class="holiday-face holiday-face_parallax">
		<div class="intro">
			<div class="start">[[*h1-prev]]</div>
			<h1>[[*h1]]</h1>
		</div>
			<div data-offset="55" class="holiday-face__item holiday-face__item_1"></div>
			<div data-offset="80" class="holiday-face__item holiday-face__item_2"></div>
			<div data-offset="60" class="holiday-face__item holiday-face__item_3"></div>
			<div data-offset="75" class="holiday-face__item holiday-face__item_4"></div>
			<div data-offset="95" class="holiday-face__item holiday-face__item_5"></div>
		</div>
		
		<a href="#about">
			<div class="scroll-down">
				<span>
					<i class="fa fa-angle-down fa-2x"></i>
				</span>
			</div>
		</a>
	</section>
	<!-- Home end -->
	<!-- Navigation start -->
	<header class="header">
		<nav class="navbar navbar-custom" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">D.Morozov</a>
				</div>
				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">Главная</a></li>
						<li><a href="#about">Обо мне</a></li>
						<li><a href="#portfolio">Портфолио</a></li>
						<li><a href="#skills">Навыки</a></li>
						<li><a href="#testimonials">Инструменты</a></li>
						<li><a href="#contact">Контакты</a></li>
					</ul>
				</div>
			</div>
			<!-- .container -->
		</nav>
	</header>
	<!-- Navigation end -->
	<!-- Services start -->
	<section id="about" class="pfblock pfblock-white">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Обо мне</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							ПОЗНАКОМИМСЯ БЛИЖЕ
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<i class="fa fa-male" aria-hidden="true"></i>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">НЕМНОГО О СЕБЕ</h3>
							<div class="iconbox-desc">
								Привет! Я веб-разработчик из Славянска. Люблю писать красивый код - красивый как с точки зрения логической структуры, так и оформления. Всегда забочусь об адаптивности вёрстки и удобстве её дальнейшего использования.
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="iconbox wow slideInDown">
						<img src="assets/images/avatar.JPG" alt="">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<i class="fa fa-book" aria-hidden="true"></i>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">ПЕРСОНАЛЬНАЯ ИНФОРМАЦИЯ</h3>
							<div class="iconbox-desc">
								Дата рождения: 25 ноября 1993 года<br>
								Номер телефона: +38 095 09 21 306<br>
								E-mail: dmitriy_morozov@mail.ua<br>
								<ul class="social-links social-links--about">
									<li><a href="https://vk.com/here_without_u" class="wow fadeInUp" data-wow-delay=".4s" target="_blank">
										<i class="fa fa-vk"></i></a>
									</li>
									<li><a href="https://github.com/dmitriy-morozov" class="wow fadeInUp" data-wow-delay=".1s" target="_blank">
										<i class="fa fa-github"></i></a>
									</li>
									<li><a href="skype:dm_morozov1?chat" class="wow fadeInUp" data-wow-delay=".2s" target="_blank">
										<i class="fa fa-skype"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .row -->
		</div>
		<!-- .container -->
	</section>
	<!-- Services end -->
	<!-- Portfolio start -->
	<div class="back"></div>
	<section id="portfolio" class="pfblock pfblock-green">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Портфолио</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Мои работы
						</div>
					</div>
				</div>
			</div>
			<!-- .row -->
			<div class="row text-center">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="grid wow zoomIn">
						<figure class="effect-bubba">
							<img src="assets/images/item-1.jpg" alt="img01"/>
							<figcaption>
								<h2>Motion</h2>
								<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal1">
									Подробнее
								</button>
								<br>
								<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/motion" target="_blank">Перейти</a>
							</p>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- col end -->
			<!-- Modal for portfolio item -->
			<div class="modal fade" id="myModal1" role="dialog" aria-labelledby="myModalLabel1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel1">Лендинг шаблон Motion<br><br>
								<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/motion" target="_blank">Перейти</a>
							</h4>
						</div>
						<div class="modal-body">
							<b>Особенности проекта:</b><br><br>

							Bootstrap 3;<br>
							HTML5, CSS3, JQUERY;<br>
							Адаптивная вёрстка с подходом Mobile First (сначала мобильные);<br>
							Валидная разметка по методологии БЭМ;<br>
							Препроцессор LESS;<br>
							Pixel Perfect вёрстка;<br>
							Автоматизация сборки с помощью GULP;<br>
							Оптимизация стилей, изображений, скриптов.<br>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="grid wow zoomIn">
					<figure class="effect-bubba">
						<img src="assets/images/item-2.jpg" alt="img01"/>
						<figcaption>
							<h2>Pink</h2>
							<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal2">
								Подробнее
							</button>
							<br>
							<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/pink" target="_blank">Перейти</a>
						</p>
					</figcaption>
				</figure>
			</div>
		</div>
		<!-- col end -->
		<!-- Modal for portfolio item -->
		<div class="modal fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel2">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel2">Промо-сайт приложения "Пинк"<br><br>
							<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/pink" target="_blank">Перейти</a>
						</h4>
					</div>
					<div class="modal-body">
						<b>Особенности проекта:</b><br><br>
						HTML5, CSS3, JQUERY;<br>
						Адаптивная вёрстка с подходом Mobile First (сначала мобильные);<br>
						Валидная разметка по методологии БЭМ;<br>
						Препроцессор LESS;<br>
						Использование SVG изображений;<br>
						Retina Ready (ретинизация изображений);<br>
						Pixel Perfect вёрстка;<br>
						Автоматизация сборки с помощью GULP;<br>
						Оптимизация стилей, изображений, скриптов.<br><br>
						<i>Использован учебный макет HTML Academy</i>	
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal end -->
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="grid wow zoomIn">
				<figure class="effect-bubba">
					<img src="assets/images/item-3.jpg" alt="img01"/>
					<figcaption>
						<h2>Глэйси</h2>
						<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal3">
							Подробнее
						</button>
						<br>
						<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/gllacy" target="_blank">Перейти</a>
					</p>
				</figcaption>
			</figure>
		</div>
	</div>
	<!-- col end -->
	<!-- Modal for portfolio item -->
	<div class="modal fade" id="myModal3" role="dialog" aria-labelledby="myModalLabel3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel3">Магазин мороженого "Глэйси"<br><br>
						<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/gllacy" target="_blank">Перейти</a>
					</h4>
				</div>
				<div class="modal-body">
					<b>Особенности проекта:</b><br><br>

					HTML5, CSS3, JQUERY;<br>
					Резиновая вёрстка (900-1440px);<br>
					Валидная разметка по методологии БЭМ;<br>
					Pixel Perfect вёрстка;<br><br>
					<i>Использован учебный макет HTML Academy</i>	
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal end -->
	<div class="col-xs-12 col-sm-6 col-md-4">
		<div class="grid wow zoomIn">
			<figure class="effect-bubba">
				<img src="assets/images/item-4.jpg" alt="img01"/>
				<figcaption>
					<h2>Flat</h2>
					<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal4">
						Подробнее
					</button>
					<br>
					<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/flat" target="_blank">Перейти</a>
				</p>
			</figcaption>
		</figure>
	</div>
</div>
<!-- col end -->
<!-- Modal for portfolio item -->
<div class="modal fade" id="myModal4" role="dialog" aria-labelledby="myModalLabel4">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel4">Лендинг шаблон Flat <br><br>
					<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/flat" target="_blank">Перейти</a>
				</h4>
			</div>
			<div class="modal-body">
				<b>Особенности проекта:</b><br><br>
				HTML5, CSS3, JQUERY;<br>
				Адаптивная вёрстка;<br>
				Валидная разметка по методологии БЭМ;<br>
				Pixel Perfect вёрстка.<br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal end -->
<div class="col-xs-12 col-sm-6 col-md-4">
	<div class="grid wow zoomIn">
		<figure class="effect-bubba">
			<img src="assets/images/item-5.jpg" alt="img05"/>
			<figcaption>
				<h2>Кваст</h2>
				<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal5">
					Подробнее
				</button>
				<br>
				<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/kvast" target="_blank">Перейти</a>
			</p>
		</figcaption>
	</figure>
</div>
</div>
<!-- col end -->
<!-- Modal for portfolio item -->
<div class="modal fade" id="myModal5" role="dialog" aria-labelledby="myModalLabel5">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel5">Промо-сайт "Кваст"<br><br>
					<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/kvast" target="_blank">Перейти</a>
				</h4>
			</div>
			<div class="modal-body">
				<b>Особенности проекта:</b><br><br>
				HTML5, CSS3, JavaScript;<br>
				Фиксированная, валидная вёрстка;<br>
				Pixel Perfect;<br><br>
				<i>Использован учебный макет HTML Academy</i>	
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal end -->
</div>
</div>
<!-- .contaier -->
</section>
<div class="back back--after"></div>
<!-- Portfolio end -->
<!-- Skills start -->
<section class="pfblock pfblock-white" id="skills">
	<div class="container">
		<div class="row skills">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Мои навыки</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							HTML5;CSS3;Bootstrap 3;<br>
							JavaScript, jQuery (подключение и настройка готовых плагинов);<br>
							Работа с SVG;<br>
							Адаптивная, резиновая, фиксированная верстка;<br>
							Кроссбраузерная (Chrome, Opera, Firefox, Safari, Edge, IE 11);<br>
							Валидная разметка по методологии БЭМ;<br>
							Подход Mobile First;<br>
							Ретинизация и оптимизация.<br>
						</div>
					</div>
				</div>
			</div>
			<!-- .row -->
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">90</span>
				</span>
				<h3 class="text-center">Html5</h3>
			</div>
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">90</span>
				</span>
				<h3 class="text-center">Css3</h3>
			</div>
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="85" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">85</span>
				</span>
				<h3 class="text-center">Less</h3>
			</div>
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="65" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">65</span>
				</span>
				<h3 class="text-center">jQuery</h3>
			</div>
		</div>
		<!--End row -->
	</div>
</section>
<!-- Skills end -->
<!-- Instruments start -->
<div class="back"></div>
<section id="testimonials" class="pfblock pfblock-green">
	<div class="container">
		<div class="row skills">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Мои инструменты</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Photoshop (необходимые навыки для вёрстки);<br>
							Sublime Text 3;<br>
							Препроцессор LESS;<br>
							GULP (автоматизация сборки проекта и оптимизация файлов);<br>
							GIT.<br>
						</div>
					</div>
				</div>
			</div>
			<!-- .row -->
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="70" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">70</span>
				</span>
				<h3 class="text-center">Photoshop</h3>
			</div>
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">90</span>
				</span>
				<h3 class="text-center">Sublime Text 3</h3>
			</div>
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="50" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">50</span>
				</span>
				<h3 class="text-center">GULP</h3>
			</div>
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="75" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">75</span>
				</span>
				<h3 class="text-center">GIT</h3>
			</div>
		</div>
		<!--End row -->
	</div>
</section>
<div class="back back--after"></div>
<!-- Testimonial end -->
<!-- Contact start -->
<section id="contact" class="pfblock pfblock-white">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="pfblock-header">
					<h2 class="pfblock-title">Напишите мне</h2>
					<div class="pfblock-line"></div>
					<div class="pfblock-subtitle">
						ОСТАВЬТЕ ВАШЕ СООБЩЕНИЕ
					</div>
				</div>
			</div>
		</div>
		<!-- .row -->
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form method="post" action="https://formspree.io/dmitriy_morozov@mail.ua" id="contact-form" target="_blank">
					<div class="form-group wow fadeInUp">
						<label class="sr-only" for="name">Ваше имя</label>
						<input type="text" id="c_name" class="form-control" name="name" placeholder="Ваше имя">
					</div>
					<div class="form-group wow fadeInUp" data-wow-delay=".1s">
						<label class="sr-only" for="_replyto">Ваш E-mail</label>
						<input type="email" id="c_email" class="form-control" name="_replyto" placeholder="Ваш E-mail">
					</div>
					<div class="form-group wow fadeInUp" data-wow-delay=".2s">
						<textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Ваше сообщение"></textarea>
					</div>
					<input type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s" value="Отправить сообщение">
				</form>
			</div>
		</div>
		<!-- .row -->
	</div>
	<!-- .container -->
</section>
<!-- Contact end -->
<!-- Footer start -->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul class="social-links">
					<li><a href="https://vk.com/here_without_u" class="wow fadeInUp" data-wow-delay=".4s" target="_blank">
						<i class="fa fa-vk"></i></a>
					</li>
					<li><a href="https://github.com/dmitriy-morozov" class="wow fadeInUp" data-wow-delay=".1s" target="_blank">
						<i class="fa fa-github"></i></a>
					</li>
					<li><a href="skype:dm_morozov1?chat" class="wow fadeInUp" data-wow-delay=".2s" target="_blank">
						<i class="fa fa-skype"></i></a>
					</li>
				</ul>
				<p class="heart">
					Сделано с <span class="fa fa-heart fa-2x animated pulse"></span>
				</p>
				<p class="copyright">
					© 2016 D.Morozov
				</p>
			</div>
		</div>
		<!-- .row -->
	</div>
	<!-- .container -->
</footer>
<!-- Footer end -->
<!-- Scroll to top -->
<div class="scroll-up">
	<a href="#home"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Scroll to top end-->
<!-- Google Analytics counter -->
<script>
	(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');

	ga(\'create\', \'UA-87686959-1\', \'auto\');
	ga(\'send\', \'pageview\');
</script>
<!-- /Google Analytics counter -->
<!-- Javascript files -->


<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.parallax-1.1.3.js"></script>
<script src="assets/js/imagesloaded.pkgd.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.easypiechart.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>',
    'richtext' => 0,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1480623646,
    'editedby' => 1,
    'editedon' => 1480710012,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'h1' => 
    array (
      0 => 'h1',
      1 => 'Junior Front-End Web Developer',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'h1-prev' => 
    array (
      0 => 'h1-prev',
      1 => 'Привет, меня зовут Дмитрий Морозов и я',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'portfolio' => 
    array (
      0 => 'portfolio',
      1 => '[{"MIGX_id":"1","name":"Motion","image":"assets/templates/images/item-1.jpg","description":"<b>Особенности проекта:</b><br><br>  \\t\\t\\t\\t\\t\\t\\tBootstrap 3;<br> \\t\\t\\t\\t\\t\\t\\tHTML5, CSS3, JQUERY;<br> \\t\\t\\t\\t\\t\\t\\tАдаптивная вёрстка с подходом Mobile First (сначала мобильные);<br> \\t\\t\\t\\t\\t\\t\\tВалидная разметка по методологии БЭМ;<br> \\t\\t\\t\\t\\t\\t\\tПрепроцессор LESS;<br> \\t\\t\\t\\t\\t\\t\\tPixel Perfect вёрстка;<br> \\t\\t\\t\\t\\t\\t\\tАвтоматизация сборки с помощью GULP;<br> \\t\\t\\t\\t\\t\\t\\tОптимизация стилей, изображений, скриптов.<br>","link":"https://dmitriy-morozov.github.io/motion","id":"1"},{"MIGX_id":"2","name":"Pink","image":"assets/templates/images/item-2.jpg","description":"<b>Особенности проекта:</b><br><br> \\t\\t\\t\\t\\t\\tHTML5, CSS3, JQUERY;<br> \\t\\t\\t\\t\\t\\tАдаптивная вёрстка с подходом Mobile First (сначала мобильные);<br> \\t\\t\\t\\t\\t\\tВалидная разметка по методологии БЭМ;<br> \\t\\t\\t\\t\\t\\tПрепроцессор LESS;<br> \\t\\t\\t\\t\\t\\tИспользование SVG изображений;<br> \\t\\t\\t\\t\\t\\tRetina Ready (ретинизация изображений);<br> \\t\\t\\t\\t\\t\\tPixel Perfect вёрстка;<br> \\t\\t\\t\\t\\t\\tАвтоматизация сборки с помощью GULP;<br> \\t\\t\\t\\t\\t\\tОптимизация стилей, изображений, скриптов.<br><br> \\t\\t\\t\\t\\t\\t<i>Использован учебный макет HTML Academy</i>\\t","link":"https://dmitriy-morozov.github.io/pink","id":"2"},{"MIGX_id":"3","name":"Flat","image":"assets/templates/images/item-4.jpg","description":"<b>Особенности проекта:</b><br><br> \\t\\t\\t\\tHTML5, CSS3, JQUERY;<br> \\t\\t\\t\\tАдаптивная вёрстка;<br> \\t\\t\\t\\tВалидная разметка по методологии БЭМ;<br> \\t\\t\\t\\tPixel Perfect вёрстка.<br>","link":"https://dmitriy-morozov.github.io/flat","id":"3"},{"MIGX_id":"4","name":"Глэйси","image":"assets/templates/images/item-3.jpg","description":"<b>Особенности проекта:</b><br><br>  \\t\\t\\t\\t\\tHTML5, CSS3, JQUERY;<br> \\t\\t\\t\\t\\tРезиновая вёрстка (900-1440px);<br> \\t\\t\\t\\t\\tВалидная разметка по методологии БЭМ;<br> \\t\\t\\t\\t\\tPixel Perfect вёрстка;<br><br> \\t\\t\\t\\t\\t<i>Использован учебный макет HTML Academy</i>\\t","link":"https://dmitriy-morozov.github.io/gllacy","id":"4"},{"MIGX_id":"5","name":"Кваст","image":"assets/templates/images/item-5.jpg","description":"<b>Особенности проекта:</b><br><br> \\t\\t\\t\\tHTML5, CSS3, JavaScript;<br> \\t\\t\\t\\tФиксированная, валидная вёрстка;<br> \\t\\t\\t\\tPixel Perfect;<br><br> \\t\\t\\t\\t<i>Использован учебный макет HTML Academy</i>\\t","link":"https://dmitriy-morozov.github.io/kvast","id":"5"}]',
      2 => 'default',
      3 => NULL,
      4 => 'migx',
    ),
    '_content' => '<!DOCTYPE html>
<html lang="ru">
<head>
	<base href="http://localhost:90/">
    <link rel="canonical" href="http://localhost:90/">
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Дмитрий Морозов - Front-end разработчик. Создание сайтов в Славянске, Краматорске.</title>
	<meta name="keywords" content="dmitriy-morozov, Дмитрий Морозов, Dmitriy Morozov, веб-разработчик, создание сайтов в Славянске, Краматорск, лэндинг, визитка,разработать, сделать, купить, создать, заказать, создание, создать, разработку, веб, web, студия, студии, дизайн, интернет, сайт, сайта, сайтов, славянск, в славянске">
	<meta name="author" content="Dmitriy Morozov">
    <meta name="description" content="[[*meta_description:default=`Дмитрий Морозов Front-end разработчик. Создание сайтов в Славянске Краматорске Заказать разработку сайта Славянск Создать сайт визитка Славянск Разработать официальный сайт Славянск Сделать сайт каталог Славянск`]]" />
    <meta name="robots" content="index, follow">
	<link rel="icon" href="favicon.ico" type="image/x-icon">


    <!-- Open Graph Protocol metadata -->
    <meta property="og:title" content="Дмитрий Морозов - Front-end разработчик. Создание сайтов в Славянске, Краматорске." />
    <meta property="og:site_name" content="Дмитрий Морозов Front-end разработчик" />
    <meta property="og:url" content="http://localhost:90/index.php?id=1" />
    <meta property="og:description" content="Дмитрий Морозов Front-end разработчик. Создание сайтов в Славянске Краматорске Заказать разработку сайта Славянск Создать сайт визитка Славянск Разработать официальный сайт Славянск Сделать сайт каталог Славянск" />
    <meta property="og:image" content="http://localhost:90/[[*tv_image]]" />
    <!-- <meta property="og:type" content="article" /> -->

    <!-- google plus schema -->
    <link rel="author" href="https://plus.google.com/u/0/+IhorMykhalchenko/">
    <meta itemprop="title" content="Дмитрий Морозов - Front-end разработчик. Создание сайтов в Славянске, Краматорске." />
    <meta itemprop="description" content="Дмитрий Морозов Front-end разработчик. Создание сайтов в Славянске Краматорске Заказать разработку сайта Славянск Создать сайт визитка Славянск Разработать официальный сайт Славянск Сделать сайт каталог Славянск" />
    [[*tv_image:notempty=`<meta itemprop="image" content="http://localhost:90/[[*tv_image]]" />`]]

    <!-- Plugins CSS -->
    <link href="assets/templates/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/templates/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/templates/css/animate.css" rel="stylesheet">

	<!-- Custom styles CSS -->
	<link href="assets/templates/css/style.min.css" rel="stylesheet" media="screen">
	<script src="assets/templates/js/modernizr.custom.js"></script>

    
        <!-- Google Analytics counter -->
    <script>
    	(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
    		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    	})(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');
    
    	ga(\'create\', \'UA-87686959-1\', \'auto\');
    	ga(\'send\', \'pageview\');
    </script>
    <!-- /Google Analytics counter -->


    <!-- Plugins JS -->
    <script src="assets/templates/js/jquery-1.11.1.min.js"></script>
    <script src="assets/templates/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/templates/js/jquery.parallax-1.1.3.js"></script>
    <script src="assets/templates/js/imagesloaded.pkgd.js"></script>
    <script src="assets/templates/js/jquery.sticky.js"></script>
    <script src="assets/templates/js/smoothscroll.js"></script>
    <script src="assets/templates/js/wow.min.js"></script>
    <script src="assets/templates/js/jquery.easypiechart.js"></script>
    <script src="assets/templates/js/waypoints.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/templates/js/custom.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	<!-- Home start -->
	<section id="home" class="pfblock-image screen-height b-page b-page_holiday-face b-page_holiday-bg_2">
		<div data-id="1" class="holiday-face holiday-face_parallax">
		<div class="intro">
			<div class="start">Привет, меня зовут Дмитрий Морозов и я</div>
			<h1>Junior Front-End Web Developer</h1>
		</div>
			<div data-offset="55" class="holiday-face__item holiday-face__item_1"></div>
			<div data-offset="80" class="holiday-face__item holiday-face__item_2"></div>
			<div data-offset="60" class="holiday-face__item holiday-face__item_3"></div>
			<div data-offset="75" class="holiday-face__item holiday-face__item_4"></div>
			<div data-offset="95" class="holiday-face__item holiday-face__item_5"></div>
		</div>
		
		<a href="#about">
			<div class="scroll-down">
				<span>
					<i class="fa fa-angle-down fa-2x"></i>
				</span>
			</div>
		</a>
	</section>
	<!-- Home end -->
	<!-- Navigation start -->
	<header class="header">
		<nav class="navbar navbar-custom" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">D.Morozov</a>
				</div>
				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">Главная</a></li>
						<li><a href="#about">Обо мне</a></li>
						<li><a href="#portfolio">Портфолио</a></li>
						<li><a href="#skills">Навыки</a></li>
						<li><a href="#testimonials">Инструменты</a></li>
						<li><a href="#contact">Контакты</a></li>
					</ul>
				</div>
			</div>
			<!-- .container -->
		</nav>
	</header>
	<!-- Navigation end -->
	<!-- Services start -->
	<section id="about" class="pfblock pfblock-white">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Обо мне</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							ПОЗНАКОМИМСЯ БЛИЖЕ
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<i class="fa fa-male" aria-hidden="true"></i>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">НЕМНОГО О СЕБЕ</h3>
							<div class="iconbox-desc">
								Привет! Я веб-разработчик из Славянска. Люблю писать красивый код - красивый как с точки зрения логической структуры, так и оформления. Всегда забочусь об адаптивности вёрстки и удобстве её дальнейшего использования.
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="iconbox wow slideInDown">
						<img src="assets/templates/images/avatar.JPG" alt="">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<i class="fa fa-book" aria-hidden="true"></i>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">ПЕРСОНАЛЬНАЯ ИНФОРМАЦИЯ</h3>
							<div class="iconbox-desc">
								Дата рождения: 25 ноября 1993 года<br>
								Номер телефона: +38 095 09 21 306<br>
								E-mail: dmitriy_morozov@mail.ua<br>
								<ul class="social-links social-links--about">
									<li><a href="https://vk.com/here_without_u" class="wow fadeInUp" data-wow-delay=".4s" target="_blank">
										<i class="fa fa-vk"></i></a>
									</li>
									<li><a href="https://github.com/dmitriy-morozov" class="wow fadeInUp" data-wow-delay=".1s" target="_blank">
										<i class="fa fa-github"></i></a>
									</li>
									<li><a href="skype:dm_morozov1?chat" class="wow fadeInUp" data-wow-delay=".2s" target="_blank">
										<i class="fa fa-skype"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .row -->
		</div>
		<!-- .container -->
	</section>
	<!-- Services end -->
	<!-- Portfolio start -->
	<div class="back"></div>
	<section id="portfolio" class="pfblock pfblock-green">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Портфолио</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Мои работы
						</div>
					</div>
				</div>
			</div>
			<!-- .row -->
			<div class="row text-center">
			                 <div class="col-xs-12 col-sm-6 col-md-4">
					<div class="grid wow zoomIn">
						<figure class="effect-bubba">
							<img src="assets/templates/images/item-1.jpg" alt="img01"/>
							<figcaption>
								<h2>Motion</h2>
								<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal1">
									Подробнее
								</button>
								<br>
								<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/motion" target="_blank">Перейти</a>
							    </p>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- col end -->
			<!-- Modal for portfolio item -->
			<div class="modal fade" id="myModal1" role="dialog" aria-labelledby="myModalLabel1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel1">Motion<br><br>
								<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/motion" target="_blank">Перейти</a>
							</h4>
						</div>
						<div class="modal-body">
						<b>Особенности проекта:</b><br><br>  							Bootstrap 3;<br> 							HTML5, CSS3, JQUERY;<br> 							Адаптивная вёрстка с подходом Mobile First (сначала мобильные);<br> 							Валидная разметка по методологии БЭМ;<br> 							Препроцессор LESS;<br> 							Pixel Perfect вёрстка;<br> 							Автоматизация сборки с помощью GULP;<br> 							Оптимизация стилей, изображений, скриптов.<br>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->            <div class="col-xs-12 col-sm-6 col-md-4">
					<div class="grid wow zoomIn">
						<figure class="effect-bubba">
							<img src="assets/templates/images/item-2.jpg" alt="img01"/>
							<figcaption>
								<h2>Pink</h2>
								<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal2">
									Подробнее
								</button>
								<br>
								<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/pink" target="_blank">Перейти</a>
							    </p>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- col end -->
			<!-- Modal for portfolio item -->
			<div class="modal fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel2">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel2">Pink<br><br>
								<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/pink" target="_blank">Перейти</a>
							</h4>
						</div>
						<div class="modal-body">
						<b>Особенности проекта:</b><br><br> 						HTML5, CSS3, JQUERY;<br> 						Адаптивная вёрстка с подходом Mobile First (сначала мобильные);<br> 						Валидная разметка по методологии БЭМ;<br> 						Препроцессор LESS;<br> 						Использование SVG изображений;<br> 						Retina Ready (ретинизация изображений);<br> 						Pixel Perfect вёрстка;<br> 						Автоматизация сборки с помощью GULP;<br> 						Оптимизация стилей, изображений, скриптов.<br><br> 						<i>Использован учебный макет HTML Academy</i>	
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->            <div class="col-xs-12 col-sm-6 col-md-4">
					<div class="grid wow zoomIn">
						<figure class="effect-bubba">
							<img src="assets/templates/images/item-4.jpg" alt="img01"/>
							<figcaption>
								<h2>Flat</h2>
								<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal3">
									Подробнее
								</button>
								<br>
								<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/flat" target="_blank">Перейти</a>
							    </p>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- col end -->
			<!-- Modal for portfolio item -->
			<div class="modal fade" id="myModal3" role="dialog" aria-labelledby="myModalLabel3">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel3">Flat<br><br>
								<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/flat" target="_blank">Перейти</a>
							</h4>
						</div>
						<div class="modal-body">
						<b>Особенности проекта:</b><br><br> 				HTML5, CSS3, JQUERY;<br> 				Адаптивная вёрстка;<br> 				Валидная разметка по методологии БЭМ;<br> 				Pixel Perfect вёрстка.<br>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->            <div class="col-xs-12 col-sm-6 col-md-4">
					<div class="grid wow zoomIn">
						<figure class="effect-bubba">
							<img src="assets/templates/images/item-3.jpg" alt="img01"/>
							<figcaption>
								<h2>Глэйси</h2>
								<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal4">
									Подробнее
								</button>
								<br>
								<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/gllacy" target="_blank">Перейти</a>
							    </p>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- col end -->
			<!-- Modal for portfolio item -->
			<div class="modal fade" id="myModal4" role="dialog" aria-labelledby="myModalLabel4">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel4">Глэйси<br><br>
								<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/gllacy" target="_blank">Перейти</a>
							</h4>
						</div>
						<div class="modal-body">
						<b>Особенности проекта:</b><br><br>  					HTML5, CSS3, JQUERY;<br> 					Резиновая вёрстка (900-1440px);<br> 					Валидная разметка по методологии БЭМ;<br> 					Pixel Perfect вёрстка;<br><br> 					<i>Использован учебный макет HTML Academy</i>	
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->            <div class="col-xs-12 col-sm-6 col-md-4">
					<div class="grid wow zoomIn">
						<figure class="effect-bubba">
							<img src="assets/templates/images/item-5.jpg" alt="img01"/>
							<figcaption>
								<h2>Кваст</h2>
								<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal5">
									Подробнее
								</button>
								<br>
								<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/kvast" target="_blank">Перейти</a>
							    </p>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- col end -->
			<!-- Modal for portfolio item -->
			<div class="modal fade" id="myModal5" role="dialog" aria-labelledby="myModalLabel5">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel5">Кваст<br><br>
								<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/kvast" target="_blank">Перейти</a>
							</h4>
						</div>
						<div class="modal-body">
						<b>Особенности проекта:</b><br><br> 				HTML5, CSS3, JavaScript;<br> 				Фиксированная, валидная вёрстка;<br> 				Pixel Perfect;<br><br> 				<i>Использован учебный макет HTML Academy</i>	
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->

</div>
</div>
<!-- .contaier -->
</section>
<div class="back back--after"></div>
<!-- Portfolio end -->
<!-- Skills start -->
<section class="pfblock pfblock-white" id="skills">
	<div class="container">
		<div class="row skills">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Мои навыки</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							HTML5;CSS3;Bootstrap 3;<br>
							JavaScript, jQuery (подключение и настройка готовых плагинов);<br>
							Работа с SVG;<br>
							Адаптивная, резиновая, фиксированная верстка;<br>
							Кроссбраузерная (Chrome, Opera, Firefox, Safari, Edge, IE 11);<br>
							Валидная разметка по методологии БЭМ;<br>
							Подход Mobile First;<br>
							Ретинизация и оптимизация.<br>
						</div>
					</div>
				</div>
			</div>
			<!-- .row -->
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">90</span>
				</span>
				<h3 class="text-center">Html5</h3>
			</div>
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">90</span>
				</span>
				<h3 class="text-center">Css3</h3>
			</div>
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="85" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">85</span>
				</span>
				<h3 class="text-center">Less</h3>
			</div>
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="65" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">65</span>
				</span>
				<h3 class="text-center">jQuery</h3>
			</div>
		</div>
		<!--End row -->
	</div>
</section>
<!-- Skills end -->
<!-- Instruments start -->
<div class="back"></div>
<section id="testimonials" class="pfblock pfblock-green">
	<div class="container">
		<div class="row skills">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Мои инструменты</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Photoshop (необходимые навыки для вёрстки);<br>
							Sublime Text 3;<br>
							Препроцессор LESS;<br>
							GULP (автоматизация сборки проекта и оптимизация файлов);<br>
							GIT.<br>
						</div>
					</div>
				</div>
			</div>
			<!-- .row -->
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="70" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">70</span>
				</span>
				<h3 class="text-center">Photoshop</h3>
			</div>
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">90</span>
				</span>
				<h3 class="text-center">Sublime Text 3</h3>
			</div>
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="50" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">50</span>
				</span>
				<h3 class="text-center">GULP</h3>
			</div>
			<div class="col-sm-6 col-md-3 text-center">
				<span data-percent="75" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
					<span class="percent">75</span>
				</span>
				<h3 class="text-center">GIT</h3>
			</div>
		</div>
		<!--End row -->
	</div>
</section>
<div class="back back--after"></div>
<!-- Testimonial end -->
<!-- Contact start -->
<section id="contact" class="pfblock pfblock-white">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="pfblock-header">
					<h2 class="pfblock-title">Напишите мне</h2>
					<div class="pfblock-line"></div>
					<div class="pfblock-subtitle">
						ОСТАВЬТЕ ВАШЕ СООБЩЕНИЕ
					</div>
				</div>
			</div>
		</div>
		<!-- .row -->
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form method="post" action="https://formspree.io/dmitriy_morozov@mail.ua" id="contact-form" target="_blank">
					<div class="form-group wow fadeInUp">
						<label class="sr-only" for="name">Ваше имя</label>
						<input type="text" id="c_name" class="form-control" name="name" placeholder="Ваше имя">
					</div>
					<div class="form-group wow fadeInUp" data-wow-delay=".1s">
						<label class="sr-only" for="_replyto">Ваш E-mail</label>
						<input type="email" id="c_email" class="form-control" name="_replyto" placeholder="Ваш E-mail">
					</div>
					<div class="form-group wow fadeInUp" data-wow-delay=".2s">
						<textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Ваше сообщение"></textarea>
					</div>
					<input type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s" value="Отправить сообщение">
				</form>
			</div>
		</div>
		<!-- .row -->
	</div>
	<!-- .container -->
</section>
<!-- Contact end -->
<!-- Footer start -->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul class="social-links">
					<li><a href="https://vk.com/here_without_u" class="wow fadeInUp" data-wow-delay=".4s" target="_blank">
						<i class="fa fa-vk"></i></a>
					</li>
					<li><a href="https://github.com/dmitriy-morozov" class="wow fadeInUp" data-wow-delay=".1s" target="_blank">
						<i class="fa fa-github"></i></a>
					</li>
					<li><a href="skype:dm_morozov1?chat" class="wow fadeInUp" data-wow-delay=".2s" target="_blank">
						<i class="fa fa-skype"></i></a>
					</li>
				</ul>
				<p class="heart">
					Сделано с <span class="fa fa-heart fa-2x animated pulse"></span>
				</p>
				<p class="copyright">
					© 2016 D.Morozov
				</p>
			</div>
		</div>
		<!-- .row -->
	</div>
	<!-- .container -->
</footer>
<!-- Footer end -->
<!-- Scroll to top -->
<div class="scroll-up">
	<a href="#home"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Scroll to top end-->

</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*longtitle]]' => 'Дмитрий Морозов - Front-end разработчик. Создание сайтов в Славянске, Краматорске.',
    '[[*description]]' => 'Дмитрий Морозов Front-end разработчик. Создание сайтов в Славянске Краматорске Заказать разработку сайта Славянск Создать сайт визитка Славянск Разработать официальный сайт Славянск Сделать сайт каталог Славянск',
    '[[*pagetitle]]' => 'Главная',
    '[[*longtitle:default=`Главная`]]' => 'Дмитрий Морозов - Front-end разработчик. Создание сайтов в Славянске, Краматорске.',
    '[[*id]]' => 1,
    '[[~1? &scheme=`full`]]' => 'http://localhost:90/index.php?id=1',
    '[[*h1-prev]]' => 'Привет, меня зовут Дмитрий Морозов и я',
    '[[*h1]]' => 'Junior Front-End Web Developer',
    '[[getImageList? &tvname=`portfolio` &tpl=`workstpl`]]' => '            <div class="col-xs-12 col-sm-6 col-md-4">
					<div class="grid wow zoomIn">
						<figure class="effect-bubba">
							<img src="assets/templates/images/item-1.jpg" alt="img01"/>
							<figcaption>
								<h2>Motion</h2>
								<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal1">
									Подробнее
								</button>
								<br>
								<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/motion" target="_blank">Перейти</a>
							    </p>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- col end -->
			<!-- Modal for portfolio item -->
			<div class="modal fade" id="myModal1" role="dialog" aria-labelledby="myModalLabel1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel1">Motion<br><br>
								<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/motion" target="_blank">Перейти</a>
							</h4>
						</div>
						<div class="modal-body">
						<b>Особенности проекта:</b><br><br>  							Bootstrap 3;<br> 							HTML5, CSS3, JQUERY;<br> 							Адаптивная вёрстка с подходом Mobile First (сначала мобильные);<br> 							Валидная разметка по методологии БЭМ;<br> 							Препроцессор LESS;<br> 							Pixel Perfect вёрстка;<br> 							Автоматизация сборки с помощью GULP;<br> 							Оптимизация стилей, изображений, скриптов.<br>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->            <div class="col-xs-12 col-sm-6 col-md-4">
					<div class="grid wow zoomIn">
						<figure class="effect-bubba">
							<img src="assets/templates/images/item-2.jpg" alt="img01"/>
							<figcaption>
								<h2>Pink</h2>
								<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal2">
									Подробнее
								</button>
								<br>
								<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/pink" target="_blank">Перейти</a>
							    </p>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- col end -->
			<!-- Modal for portfolio item -->
			<div class="modal fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel2">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel2">Pink<br><br>
								<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/pink" target="_blank">Перейти</a>
							</h4>
						</div>
						<div class="modal-body">
						<b>Особенности проекта:</b><br><br> 						HTML5, CSS3, JQUERY;<br> 						Адаптивная вёрстка с подходом Mobile First (сначала мобильные);<br> 						Валидная разметка по методологии БЭМ;<br> 						Препроцессор LESS;<br> 						Использование SVG изображений;<br> 						Retina Ready (ретинизация изображений);<br> 						Pixel Perfect вёрстка;<br> 						Автоматизация сборки с помощью GULP;<br> 						Оптимизация стилей, изображений, скриптов.<br><br> 						<i>Использован учебный макет HTML Academy</i>	
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->            <div class="col-xs-12 col-sm-6 col-md-4">
					<div class="grid wow zoomIn">
						<figure class="effect-bubba">
							<img src="assets/templates/images/item-4.jpg" alt="img01"/>
							<figcaption>
								<h2>Flat</h2>
								<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal3">
									Подробнее
								</button>
								<br>
								<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/flat" target="_blank">Перейти</a>
							    </p>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- col end -->
			<!-- Modal for portfolio item -->
			<div class="modal fade" id="myModal3" role="dialog" aria-labelledby="myModalLabel3">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel3">Flat<br><br>
								<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/flat" target="_blank">Перейти</a>
							</h4>
						</div>
						<div class="modal-body">
						<b>Особенности проекта:</b><br><br> 				HTML5, CSS3, JQUERY;<br> 				Адаптивная вёрстка;<br> 				Валидная разметка по методологии БЭМ;<br> 				Pixel Perfect вёрстка.<br>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->            <div class="col-xs-12 col-sm-6 col-md-4">
					<div class="grid wow zoomIn">
						<figure class="effect-bubba">
							<img src="assets/templates/images/item-3.jpg" alt="img01"/>
							<figcaption>
								<h2>Глэйси</h2>
								<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal4">
									Подробнее
								</button>
								<br>
								<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/gllacy" target="_blank">Перейти</a>
							    </p>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- col end -->
			<!-- Modal for portfolio item -->
			<div class="modal fade" id="myModal4" role="dialog" aria-labelledby="myModalLabel4">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel4">Глэйси<br><br>
								<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/gllacy" target="_blank">Перейти</a>
							</h4>
						</div>
						<div class="modal-body">
						<b>Особенности проекта:</b><br><br>  					HTML5, CSS3, JQUERY;<br> 					Резиновая вёрстка (900-1440px);<br> 					Валидная разметка по методологии БЭМ;<br> 					Pixel Perfect вёрстка;<br><br> 					<i>Использован учебный макет HTML Academy</i>	
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->            <div class="col-xs-12 col-sm-6 col-md-4">
					<div class="grid wow zoomIn">
						<figure class="effect-bubba">
							<img src="assets/templates/images/item-5.jpg" alt="img01"/>
							<figcaption>
								<h2>Кваст</h2>
								<p><button type="button" class="btn btn-primary btn-lg btn-green" data-toggle="modal" data-target="#myModal5">
									Подробнее
								</button>
								<br>
								<a class="btn btn-primary btn-lg btn-green" href="https://dmitriy-morozov.github.io/kvast" target="_blank">Перейти</a>
							    </p>
						</figcaption>
					</figure>
				</div>
			</div>
			<!-- col end -->
			<!-- Modal for portfolio item -->
			<div class="modal fade" id="myModal5" role="dialog" aria-labelledby="myModalLabel5">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel5">Кваст<br><br>
								<a class="btn btn-primary btn-xs btn-green" href="https://dmitriy-morozov.github.io/kvast" target="_blank">Перейти</a>
							</h4>
						</div>
						<div class="modal-body">
						<b>Особенности проекта:</b><br><br> 				HTML5, CSS3, JavaScript;<br> 				Фиксированная, валидная вёрстка;<br> 				Pixel Perfect;<br><br> 				<i>Использован учебный макет HTML Academy</i>	
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal end -->',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
    ),
    'modSnippet' => 
    array (
      'getImageList' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getImageList',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/**
 * getImageList
 *
 * Copyright 2009-2014 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */


$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
$outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
$docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$inheritFrom = $modx->getOption(\'inheritFrom\', $scriptProperties, \'\'); //commaseparated list of resource-ids or/and the keyword \'parents\' where to inherit from
$inheritFrom = !empty($inheritFrom) ? explode(\',\',$inheritFrom) : \'\';

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }
        
        if (empty($outputvalue)){
            $outputvalue = $tv->renderOutput($docid);
            if (empty($outputvalue) && !empty($inheritFrom)){
                foreach ($inheritFrom as $from){
                    if ($from == \'parents\'){
                        $outputvalue = $tv->processInheritBinding(\'\',$docid);
                    }else{
                        $outputvalue = $tv->renderOutput($from);
                    }
                    if (!empty($outputvalue)){
                        break;
                    }                    
                }
            }
        }

       
        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        if ($migx->source = $tv->getSource($migx->working_context, false)){
            $migx->source->initialize();
        }
        
    }


}

if (empty($outputvalue)) {
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';

$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));

if (!empty($reverse)) {
    $items = array_reverse($items);
}

// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$items = $offset > 0 ? array_slice($items, $offset) : $items;
$count = count($items);

if ($count > 0) {
    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $count = count($items);
    $tempitems = array();

    for ($i = 0; $i < $limit; $i++) {
        if ($i >= $count) {
            break;
        }
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;

            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);
                $value = $tv->renderOutput($docid);
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * getImageList
 *
 * Copyright 2009-2014 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */


$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
$outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
$docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$inheritFrom = $modx->getOption(\'inheritFrom\', $scriptProperties, \'\'); //commaseparated list of resource-ids or/and the keyword \'parents\' where to inherit from
$inheritFrom = !empty($inheritFrom) ? explode(\',\',$inheritFrom) : \'\';

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }
        
        if (empty($outputvalue)){
            $outputvalue = $tv->renderOutput($docid);
            if (empty($outputvalue) && !empty($inheritFrom)){
                foreach ($inheritFrom as $from){
                    if ($from == \'parents\'){
                        $outputvalue = $tv->processInheritBinding(\'\',$docid);
                    }else{
                        $outputvalue = $tv->renderOutput($from);
                    }
                    if (!empty($outputvalue)){
                        break;
                    }                    
                }
            }
        }

       
        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        if ($migx->source = $tv->getSource($migx->working_context, false)){
            $migx->source->initialize();
        }
        
    }


}

if (empty($outputvalue)) {
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';

$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));

if (!empty($reverse)) {
    $items = array_reverse($items);
}

// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$items = $offset > 0 ? array_slice($items, $offset) : $items;
$count = count($items);

if ($count > 0) {
    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $count = count($items);
    $tempitems = array();

    for ($i = 0; $i < $limit; $i++) {
        if ($i >= $count) {
            break;
        }
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;

            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);
                $value = $tv->renderOutput($docid);
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'h1-prev' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'h1-prev',
          'caption' => 'Предзаголовок',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'h1' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'h1',
          'caption' => 'Заголовок приветствие',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);