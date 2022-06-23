
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Inicio - SurrealBuzos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.php" class="logo"><strong>Surreal</strong> <span>Buzos</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Inicio</a></li>
							<li><a href="landing.php">Catalogo</a></li>
							<li><a href="generic.php">Informacion</a></li>
							<li><a href="elements.php">Contacto</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary fit">Crear cuenta</a></li>
							<li><a href="#" class="button fit">Iniciar sesion</a></li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Surreal</h1>
							</header>
							<div class="content">
								<p>info de la pag<br />
								mas info de la pag</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Ver catalogo</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/buzohombreindice.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.php" class="link">Hombres</a></h3>
										<p>Descripcion de hombres</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/buzomujerindice.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.php" class="link">Mujeres</a></h3>
										<p>Descripcion de mujeres</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/generalindice.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.php" class="link">Todo</a></h3>
										<p>Descripcion de todo</p>
									</header>
								</article>
								
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>Breve descripcion</h2>
									</header>
									<p>Mision, vision y valores</p>
									<ul class="actions">
										<li><a href="generic.php" class="button next">Sobre nosotros</a></li>
									</ul>
								</div>
							</section>

					</div>

		<!-- Contact -->
		<section id="contact">
			<div class="inner">
				<section>
					<form action="registrar.php" method= "POST" class="formulario_compra">
						<div class="fields">
							<div class="field half">
								<label for="name">Nombre</label>
								<input type="text" name="name" id="name" />
							</div>
							<div class="field half">
								<label for="Mail">Mail</label>
								<input type="text" name="Mail" id="Mail" />
							</div>
							<div class="field">
								<label for="Producto">Producto</label>
								<textarea name="Producto" id="Producto" rows="6"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Enviar mensaje" class="primary" /></li>
							<li><input type="reset" value="Borrar todo" /></li>
						</ul>
					</form>
				</section>
				<section class="split">
					<section>
						<div class="contact-method">
							<span class="icon solid alt fa-envelope"></span>
							<h3>Email</h3>
							<a href="#">nuestro mail</a>
						</div>
					</section>
						<section>
							<div class="contact-method">
								<span class="icon solid alt fa-phone"></span>
								<h3>Telefono</h3>
								<span>0341 522-3000</span>
							</div>
						</section>
						<section>
							<div class="contact-method">
								<span class="icon solid alt fa-home"></span>
								<h3>Direccion</h3>
								<span>Paraguay 1950<br />
								Universidad Austral, Rosario, Santa Fe<br />
								Argentina</span>
							</div>
						</section>
					</section>
				</div>
			</section>

			<section id="contact">
			<div class="inner">
				<section>
					<form action="eliminar.php" method= "POST" class="formulario_eliminar">
						<div class="field half">
								<label for="Mail">Mail</label>
								<input type="text" name="Mail" id="Mail" />
						</div>
						<br>
						<ul class="actions">
								<li><input type="submit" value="Dar de baja la compra" class="primary" /></li>
								<li><input type="reset" value="Borrar todo" /></li>
						</ul>
					</form>
				</section>
			</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Austral</li><li>Design: Surreal </a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
