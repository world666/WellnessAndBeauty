<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Individuelle Behandlungen für Schönheit und Entspannung – Massagen, Kosmetik, Maniküre und mehr im Wellness & Beauty Studio. Jetzt Termin sichern.">
		<meta name="keywords" content="Wellness, Kosmetikstudio, Massagen, Maniküre, Pediküre, Permanent Make-up, Bräunungsdusche, Wimpernlifting, Beauty, Hersfeld, Bad Hersfeld"/>
		<title>Wellness & Beauty Studio – Kosmetik, Massagen & Pflege in Bad Hersfeld</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style1.0.0.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap-icons.css">
		<link href="https://fonts.googleapis.com/css2?family=Italianno&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Color+Emoji&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap" rel="stylesheet">
		<link rel="icon" href="ico/w1.ico">
		<meta property="og:title" content="Wellness & Beauty by Melanie Wegner - Bad Hersfeld">
		<meta property="og:description" content="Kosmetik, Massagen und Wohlfühlmomente direkt in Bad Hersfeld. Jetzt Termin sichern!">
		
		<meta property="og:url" content="https://www.wellness-beauty-hersfeld.de/">
		
	</head>
	<body>
		<?php
			$currentPage = basename($_SERVER['PHP_SELF']);
			$currentFull = $_SERVER['REQUEST_URI'];
		?>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg" >
			<div class="container d-flex justify-content-between align-items-start" style="position: relative;">
				<a class="navbar-brand pt-0" href="index.php#home">
					<img src="img/wellness_and_beauty.svg" alt="Wellness & Beauty by Melanie Wegner" class="logo-img nav-link ">
					<span class="logo-text d-none nav-link">Wellness & Beauty</span>
				</a>

				<!-- Burger-Taste -->
				<button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Offcanvas-Menü -->
				<div class="offcanvas offcanvas-end text-bg-white" tabindex="-1" id="mobileMenu">
					<div class="offcanvas-header border-bottom">
						<h5 class="offcanvas-title">Menü</h5>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Schließen"></button>
					</div>
					<div class="offcanvas-body p-1 justify-content-center align-items-end" style="padding-top: 20px;">
						<ul class="navbar-nav">
							  <li class="nav-item">
								<a class="nav-link py-2 px-3 text-dark <?php echo (strpos($currentFull, '#wellness') !== false) ? 'active' : ''; ?>" href="index.php#wellness">Wellness</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link py-2 px-3 text-dark <?php echo (strpos($currentFull, '#beauty') !== false) ? 'active' : ''; ?>" href="index.php#beauty">Beauty</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link py-2 px-3 text-dark <?php echo (strpos($currentFull, '#produkte') !== false) ? 'active' : ''; ?>" href="index.php#produkte">Produkte</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link py-2 px-3 text-dark <?php echo (strpos($currentFull, '#ich') !== false) ? 'active' : ''; ?>" href="index.php#ich">Über Studio</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link py-2 px-3 text-dark <?php echo ($currentPage == 'preise.php') ? 'active' : ''; ?>" href="preise.php">Preise</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link py-2 px-3 text-dark <?php echo (strpos($currentFull, '#kontakt') !== false) ? 'active' : ''; ?>" href="index.php#kontakt">Kontakt</a>
							  </li>
							<li>
								<a class="icon-link custom-purple" href="https://www.facebook.com/profile.php?id=100063529723545&locale=de_DE" class="me-3 custom-purple" target="_blank"><i class="bi bi-facebook"></i></a>
								<a class="icon-link custom-purple" href="https://www.instagram.com/mel_h_2005/"><i class="bi bi-instagram" class="me-3 custom-purple" target="_blank"></i></a>
								<a class="icon-link custom-purple" href="https://api.whatsapp.com/send/?phone=17664265727&text&type=phone_number&app_absent=0" class="me-3 custom-purple" target="_blank"><i class="bi bi-whatsapp"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		
		<div id="content">
			<?php
				include($content);
			?>
		</div>

		<footer class="pt-5">
			<div class="container" id="kontakt">
				<div class="row align-items-start">
					<!-- 1. Logo und soziale Medien - 25% auf großen, 50% auf mobilen Geräten -->
					<div class="col-6 col-lg-3 mb-4">
						<img src="img/wellness_and_beauty.svg" alt="Wellness & Beauty Logo" class="mb-3" style="max-width: 250px;">
						<h5 class="mt-4">Folge uns</h5>
						<a href="https://www.facebook.com/profile.php?id=100063529723545&locale=de_DE" class="me-3 custom-purple" target="_blank"><i class="bi bi-facebook" style="font-size: 1.5rem;"></i></a>
						<a href="https://www.instagram.com/mel_h_2005/" class="me-3 custom-purple" class="me-3 custom-purple" target="_blank"><i class="bi bi-instagram" style="font-size: 1.5rem;"></i></a>
						<a href="https://api.whatsapp.com/send/?phone=17664265727&text&type=phone_number&app_absent=0" class="me-3 custom-purple" target="_blank"><i class="bi bi-whatsapp" style="font-size: 1.5rem;"></i></a>
					</div>

					<!-- 2. Kontakte und Stunden - 25% auf großen, 50% auf mobilen Geräten -->
					<div class="col-6 col-lg-3 mb-4">
						<h5>Kontakt</h5>
						<p>
							Wellness & Beauty Studio<br>
							Homberger Straße 2<br>
							36251 Bad Hersfeld<br>
						</p>
						<p>
							<i class="bi bi-phone custom-purple me-1"></i>
							<a href="tel:+4917664265727" class="custom-purple text-decoration-none">+49 176 642 65727</a><br>
							<i class="bi bi-telephone custom-purple me-1"></i>
							<a href="tel:+4966212044950" class="custom-purple text-decoration-none">+49 6621 2044950</a><br>
							<i class="bi bi-envelope custom-purple me-1"></i>
							<a href="mailto:info@wellness-beauty-hersfeld.de" class="custom-purple text-decoration-none">info@wellness-beauty-hersfeld.de</a>
						</p>

						<h5>Öffnungszeiten</h5>
						<p>Montag bis Samstag<br>Termine nach Vereinbarung*</p>
						<p style="font-size: 10px;">* Termine können bis 24 Stunden vorher kostenfrei storniert werden. Danach berechnen wir 50 % des Behandlungspreises.</p>
					</div>

					<!-- 3. Karte - 50% bei großen Karten, 100% bei mobilen Geräten -->
					<div class="col-12 col-lg-6 mb-4">
						<h5>So findest du uns</h5>
						<div class="map-wrapper" style="height: 300px; max-width: 100%;">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.2092640186945!2d9.695458376971973!3d50.86624076036526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a4d31f2b94425b%3A0x69176e73317c322e!2sHomberger%20Str.%202%2C%2036251%20Bad%20Hersfeld!5e0!3m2!1sde!2sde!4v1716636126550!5m2!1sde!2sde"
								width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>

				</div>
			</div>
			<!-- Unteres Band -->
			<div class="footer-bottom text-white text-center py-3 mt-4">
				<div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
					<small>&copy; 2025 Wellness & Beauty by Melanie Wegner</small>
					<div>
						<a href="impressum.php" class="text-white text-decoration-none me-3">Impressum</a>
						<a href="datenschutz.php" class="text-white text-decoration-none">Datenschutz</a>
					</div>
				</div>
			</div>
		</footer>
		<script src="js/beauty.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>
<script>
  // Wenn die Seite geladen wird, prüfen wir den Hash
  document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll('.nav-link');

    // Entfernen Sie die aktive Klasse von allen
    links.forEach(link => link.classList.remove('active'));

    // Abrufen des aktuellen Ankers
    const hash = window.location.hash;

    // Wenn es einen Anker gibt - suchen Sie nach einem Link mit dieser href
    if (hash) {
      const activeLink = document.querySelector(`.nav-link[href$="${hash}"]`);
      if (activeLink) {
        activeLink.classList.add('active');
      }
    } else {
      // Wenn der Hash nicht vorhanden ist, markieren Sie index.php
      const path = window.location.pathname;
      if (path.includes('index.php')) {
        document.querySelector('.nav-link[href="index.php#home"]')?.classList.add('active');
      }
      if (path.includes('preise.php')) {
        document.querySelector('.nav-link[href="preise.php"]')?.classList.add('active');
      }
    }
  });
</script>