<!-- Hero Section -->
<section class="hero" style="padding-bottom: 40px;" id="home">
	<div class="container  text-md-start">
		<div class="text-box mx-auto ms-md-0" style="max-width: 600px;">
			<h1 class="mb-3">Gönn dir eine Auszeit ...</h1>
			<p class="lead text-dark">
				Entdecke unsere liebevoll ausgewählten Wellness- & Beauty-Behandlungen, die Körper und Seele ins Gleichgewicht bringen. Bei uns steht dein Wohlbefinden im Mittelpunkt – mit persönlicher Beratung, hochwertigen Produkten und echter Entspannung.
			</p>
			<a href="#" class="btn btn-primary btn-lg mt-3">Jetzt Termin vereinbaren</a>
		</div>
	</div>
</section>

<!-- Info Section with Two Columns -->
<section class="container my-5" id="wellness">
	<!-- Общий заголовок -->
	<div class="row mb-4">
		<div class="col-12 text-left">
			<h2>Wellness</h2>
		</div>
	</div>

	<div class="row g-4">
		<!-- Первая колонка -->
		<div class="col-md-6 col-md-6 overflow-hidden">
			<div class="slider-effect mb-3">
				<img src="img/koerper_behandlungen.jpg" class="img-fluid" alt="Beauty">
			</div>
			<h5>Körperbehandlungen</h5>
			<p>Einfach loslassen und die Seele baumeln lassen. Meine pflegenden Behandlungen verwöhnen Ihre Haut und schenken Ihnen wohltuende Entspannung. Spüren Sie, wie Stress verschwindet und Sie mit neuer Leichtigkeit und frischer Energie Ihren Tag genießen.</p>
			<a href="#" class="btn toggle-details d-inline-flex align-items-center gap-1" data-bs-toggle="collapse" data-bs-target="#details1" aria-expanded="false">
	  Details anzeigen <i class="bi bi-chevron-down"></i>
			</a>
			<div class="collapse mt-2" id="details1">
				<ul class="wellness-list">
					<li>Ganzkörperpeeling</li>
					<li>Tiefenwärme</li>
					<li>Tiefenwärme & Lympdrainage</li>
					<li>Tanning Bräunungsdusche</li>
				</ul>
			</div>
		</div>

		<!-- Вторая колонка -->
		<div class="col-md-6 overflow-hidden">
			<div class="slider-effect mb-3">
				<img src="img/massagen.jpg" class="img-fluid" alt="Wellness">
			</div>
			<h5>Massagen</h5>
			<p>Gönnen Sie sich eine Auszeit und spüren Sie, wie sich Verspannungen lösen und Ihr Körper neue Energie tankt. Meine Massagen bringen Harmonie in Ihr Leben und schenken Ihnen ein tiefes Gefühl von Ruhe und Ausgeglichenheit.</p>
			<a href="#" class="btn toggle-details d-inline-flex align-items-center gap-1" data-bs-toggle="collapse" data-bs-target="#details2" aria-expanded="false">
		  Details anzeigen <i class="bi bi-chevron-down"></i>
			</a>
			<div class="collapse mt-2" id="details2">
				<p>Von Klassische massagen bis hin zu Hot-Stone Massage, Hot-Chacolat Massagen für:</p>
				<ul class="wellness-list">
					<li>Ganzkörper</li>
					<li>Teilkörper</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Блок Wellness-Pakete -->
	<div class="container">
		<div class="row g-4 mt-5">
			<!-- Левая колонка с изображением -->
			<div class="col-md-6">
				<img src="img/massagen_pakete1.png" class="original-size" alt="Wellness Pakete">
			</div>

			<!-- Правая колонка с текстом -->
			<div class=" col-md-6">
				<h3 class="mb-4">Wellness-Pakete</h3>
				<ul class="wellness-list list-unstyled mb-4">
					<li><i class="me-2 text-success"></i> Lady Time
						<p>Ganzkörperpeeling, entspannende Massage und eine verwöhnende Kosmetikbehandlung – für ein rundum schönes und wohliges Gefühl.</p>
					</li>
					<li><i class="me-2 text-success"></i> Reine Männersache
						<p>Kraftvolle Rückenmassage und erfrischende Gesichtsbehandlung – für echte Tiefenentspannung und neue Energie.</p>
					</li>
					<li><i class="me-2 text-success"></i> Power-Rücken Paket
						<p>Wohltuende Tiefenwärme, gezielte Rücken-Nacken-Massage, pflegende Algen-Packung und belebende Reflextherapie – für einen starken und entspannten Rücken.</p>
					</li>
					<li><i class="me-2 text-success"></i> Wellness-Schnuppertag
						<p>Kombination aus Rückenmassage, regenerierender Algen-Packung und verwöhnender Kosmetikbehandlung – dein Verwöhnprogramm für Körper und Geist.</p>
					</li>
				</ul>
				<a href="#" class="btn btn-primary">Preis anfragen</a>
			</div>
		</div>
	</div>
</section>


<section class="py-5" style="background-color: #f7f7f7;" id="beauty">
	<div class="container position-relative">
		<h2 class="text-left mb-4">Beauty</h3>
		<p>
			Schönheit entsteht durch liebevolle Pflege und bewusste Auszeiten. In meinem Studio biete ich Ihnen individuell abgestimmte Behandlungen, die Ihre natürliche Ausstrahlung unterstreichen und Ihnen echte Entspannung schenken. Lassen Sie sich von mir verwöhnen, tauchen Sie ein in eine Welt voller Wohlgefühl und genießen Sie jeden Moment – für ein strahlendes, rundum frisches Gefühl von innen heraus.
		</p>
		<!-- Кнопки -->
		<button class="btn btn-dark position-absolute top-50 start-0 translate-middle-y z-2 rounded-circle" id="prevBtn">
			<i class="bi bi-chevron-left"></i>
		</button>
		<button class="btn btn-dark position-absolute top-50 end-0 translate-middle-y z-2 rounded-circle" id="nextBtn">
			<i class="bi bi-chevron-right"></i>
		</button>

		<!-- Слайдер -->
		<div class="beauty-slider-wrapper overflow-hidden">
			<div class="beauty-slider d-flex" id="beautySlider">
				<!-- Карточка 1 -->
				<div class="flex-shrink-0 me-4" style="width: 300px;">
					<div class="text-left">
						<img src="img/manikuere.jpg" class="img-fluid mb-2" alt="Slide 1">
						<h5>Maniküre/Peduküre</h5>
						<p>Sanfte Pflege für gepflegte Hände und Füße – für ein gepflegtes und gepflegtes Erscheinungsbild.</p>
					</div>
				</div>
				<!-- Карточка 2 -->
				<div class="flex-shrink-0 me-4" style="width: 300px;">
					<div class="text-left">
						<img src="img/kosmetikbehandlungen.jpg" class="img-fluid mb-2" alt="Slide 2">
						<h5>Kosmetikbehandlungen</h5>
						<p>Professionelle Pflege für eine strahlende, gesunde Haut und ein frisches Aussehen.</p>
					</div>
				</div>
				<!-- Карточка 3 -->
				<div class="flex-shrink-0 me-4" style="width: 300px;">
					<div class="text-left">
						<img src="img/wimpernverlaengerung.jpg" class="img-fluid mb-2" alt="Slide 3">
						<h5>Wimpernverlängerung/-lifting</h5>
						<p>Natürlich schöne Wimpern, die den Blick öffnen und für mehr Ausdruck sorgen.</p>
					</div>
				</div>
				<!-- Карточка 4 -->
				<div class="flex-shrink-0 me-4" style="width: 300px;">
					<div class="text-left">
						<img src="img/braeunungsdusche.jpg" class="img-fluid mb-2" alt="Slide 4">
						<h5>Braünungsdusche</h5>
						<p>Ein natürlicher, ebenmäßiger Teint ganz ohne Sonnenstrahlen – perfekt für jede Jahreszeit.</p>
					</div>
				</div>
				<!-- Карточка 5 -->
				<div class="flex-shrink-0 me-4" style="width: 300px;">
					<div class="text-left">
						<img src="img/make-up.jpg" class="img-fluid mb-2" alt="Slide 5">
						<h5>Make-Up</h5>
						<p>Individuell abgestimmtes Styling für jeden Anlass – elegant und perfekt auf Sie zugeschnitten.</p>
					</div>
				</div>
				<!-- Карточка 6 -->
				<div class="flex-shrink-0  me-4" style="width: 300px;">
					<div class="text-left">
						<img src="img/permanent-make-up.jpg" class="img-fluid mb-2" alt="Slide 6">
						<h5>Permanent Make-Up</h5>
						<p>Lang anhaltende Schönheit für einen stets frischen und gepflegten Look ohne Aufwand.</p>
					</div>
				</div>
			</div>
		</div>
		<a href="#" class="btn btn-primary">Preis anfragen</a>
		<a href="#" class="btn btn-primary">Termin vereinbaren</a>
	</div>
</section>

<!-- Info Section with Two Columns -->
<section class="container my-5" id="produkte">
	<!-- Общий заголовок -->
	<div class="row mb-4">
		<div class="col-12 text-left">
			<h2>Produkte</h2>
		</div>
	</div>

	<div class="row g-4">
		<!-- Первая колонка -->
		<div class="col-md-6">
			<div class="slider-effect mb-3">
				<img src="img/chogan.png" class="img-fluid mb-3" alt="Beauty">
			</div>
			<h4>CHOGAN</h4>
			<p>Die Düfte sind inspiriert von Weltbekannten Parfüms und enthalten sogar deren originalen Duftessenzen!  CHOGAN Düfte enthalten 30% Essenzen und sind daher “extrait de parfume”.</p>
		</div>

		<!-- Вторая колонка -->
		<div class="col-md-6">
			<div class="slider-effect mb-3">
				<img src="img/warmies.png" class="img-fluid mb-3" alt="Wellness">
			</div>
			<h4>Warmies</h4>
			<p>Warmies bieten wohltuende Wärme und Entspannung mit ihren kuscheligen, mit getrockneten Kräutern gefüllten Produkten. Perfekt für kalte Tage oder als beruhigendes Highlight zum Relaxen. Entspanne und genieße die wohltuende Wärme – immer und überall!</p>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
		<div class="row g-4 align-items-center text-center">
			<!-- Bild 1 -->
			<div class="col-6 col-lg-3 d-flex justify-content-center align-items-center">
				<img src="img/KLAPP.png" class="img-fluid rounded" alt="Bild 1">
			</div>
			<!-- Bild 2 -->
			<div class="col-6 col-lg-3 d-flex justify-content-center align-items-center">
				<img src="img/maurice.png" class="img-fluid rounded" alt="Bild 2">
			</div>
			<!-- Bild 3 -->
			<div class="col-6 col-lg-3 d-flex justify-content-center align-items-center">
				<img src="img/Miss_Lashes.png" class="img-fluid rounded" alt="Bild 3">
			</div>
			<!-- Bild 4 -->
			<div class="col-6 col-lg-3 d-flex justify-content-center align-items-center">
				<img src="img/pink-cosmetcs.png" class="img-fluid rounded" alt="Bild 4">
			</div>
		</div>
	</div>
</section>


<section class="py-5" style="background-color: #f7f7f7;" id="ich">
	<div class="container">
		<div class="row align-items-start">
			<!-- Левая колонка: текст -->
			<div class="col-md-6 mb-4 mb-md-0">
				<div class="row mb-4">
					<div class="col-12 text-left">
						<h2>Über mich</h2>
					</div>
				</div>

				<!-- Первый абзац - всегда виден -->
				<p>Mein Name ist Melanie Wegner, geboren am 14. November 1983. Bereits früh war mir klar: Ich möchte Menschen dabei helfen, sich wohl in ihrer Haut zu fühlen. Nach meiner Ausbildung zur Arzthelferin im Jahr 2003 folgte deshalb 2005 die Weiterbildung zur staatlich geprüften Kosmetikerin – mein wahrer Herzensweg.</p>
				<p> In den folgenden Jahren sammelte ich vielfältige Erfahrungen, absolvierte zahlreiche Zusatzqualifikationen und spezialisierte mich stetig weiter. Mein Weg führte mich zunächst in ein Hotel nach Rotenburg a.d. Fulda, wo ich als selbstständige Kosmetikerin tätig war und später die Leitung des gesamten Wellnessbereichs übernahm.</p>
				<!-- Второй абзац - будет свёрнут/развёрнут -->

				<p id="toggleParagraph" class="collapsible-collapsed" style="cursor: pointer; user-select: none;">2008 zog es mich zurück nach Bad Hersfeld, wo ich meine Tätigkeit zunächst in meinem privaten Behandlungsraum begann. 2012 war es dann endlich so weit: Ich fand mein eigenes kleines Studio in der Homberger Straße – mein persönlicher Wohlfühlort, den ich mit viel Herzblut führe und der seitdem mein berufliches Zuhause ist.</p>
				<!-- Дополнительные абзацы - скрыты по умолчанию -->
				<div id="extraParagraphs" class="collapsible-hidden">
					<p>Neben meinem Beruf erfüllt mich auch meine Familie: 2016 wurde ich zum ersten Mal Mama, 2018 habe ich geheiratet und 2021 kam unser zweites Kind zur Welt. Mit viel Erfahrung, Leidenschaft und einem offenen Ohr für die Wünsche meiner Kundinnen und Kunden biete ich in meinem Studio individuelle Kosmetikbehandlungen an, die Körper, Geist und Seele verwöhnen.</p>
					<p>Ich freue mich darauf, auch Sie in meinem Studio begrüßen zu dürfen!</p>
				</div>
				<p class="signature">Ihre Melanie Wegner</p>
			</div>

			<!-- Правая колонка: картинка -->
			<div class="col-md-6">
				<img src="img/melanie_wegner1.png" class="original-size" alt="Wellness Bild">
			</div>
		</div>
	</div>
</section>
