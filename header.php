<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php wp_title('-',true,'right'); bloginfo() ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>
<body>
	<div id="header">
		<div id="header-superior">
			<div id="header-superior-content">
				<div id="header-contato">
					<ul>
						<li><a href="https://goo.gl/maps/KhFgsoASiqQ2" target="_blanck"><i class="fas fa-map-marker-alt"></i> Av. Visconde do Rio Branco, 3770 | Fortaleza - CE</a></li>
						<li><a href="tel:+558532272788" target="_blanck"><i class="fas fa-phone"></i> (85) 3227 - 2788</a></li>
						<li><a href="https://api.whatsapp.com/send?phone=5585985914585" target="_blanck"><i class="fab fa-whatsapp"></i> (85) 98591 - 4585</a></li>
						<li><a href="#"><i class="far fa-clock"></i> Horário de Funcionamento: Seg - Sex | 08h - 17h</a></li>
					</ul>
				</div><!--/ fim header-paginas -->
			</div><!--/ fim header-superior-content -->
		</div><!--/ fim header-superior -->
		<div id="header-content">
			<div id="logo">
				<a href=""><img src="<?php bloginfo('template_url'); ?>/images/logo2.png" rel="" title=""></a>
			</div><!--/ fim logo -->
			<!-- <div id="search">
				<form action="" method="post">
					<input type="text" name="">
					<input type="submit" value="" class="btn-search" name="">
				</form>
			</div> --><!--/ fim serch -->
		</div><!--/ fim header-content -->
		<div id="nav">
			<div id="nav-content">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Quem Somos</a></li>
					<li><a href="#">Produtos</a>
						<ul>
							<li><a href="#">Telhas</a></li>
							<li><a href="#">Churrasqueiras</a></li>
							<li><a href="#">Tijolos</a></li>
							<li><a href="#">Materiais Diversos</a></li>
						</ul>
					</li>
					<li><a href="#">Projetos Realizados</a></li>
					<li><a href="#">Contato</a></li>
				</ul>				
			</div><!--/ fim nav-content -->
			<div id="nav-social">
				<ul>
					<li><a href="https://goo.gl/maps/KhFgsoASiqQ2" target="_blanck"><i class="fas fa-map-marked-alt"></i></a></li>
					<li><a href="tel:+558532272788" target="_blanck"><i class="fas fa-phone fa-1x fa-f09a"></i></a></li>
					<li><a href="https://www.facebook.com/lojaodastelhas/" target="_blanck"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="https://www.instagram.com/lojaodastelhas/" target="_blanck"><i class="fab fa-instagram"></i></a></li>
					<li><a href="http://m.me/lojaodastelhas" target="_blanck"><i class="fab fa-facebook-messenger"></i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=5585985914585" target="_blanck"><i class="fab fa-whatsapp"></i></a></li>
					<li><a href="mailto:lojaodastelhasce@gmail.com" target="_blanck"><i class="far fa-envelope"></i></a></li>
				</ul>
			</div> <!--/ fim nav-social -->
		</div><!--/ fim nav -->
		
	</div> <!--/ fim header -->