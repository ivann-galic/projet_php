<?php
echo '<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script src="https://kit.fontawesome.com/aa1f9c66ba.js" crossorigin="anonymous"></script>
	<title>CV IVANN GALIC</title>
</head>

<body>

	<header>
		<nav class="barreMenu">

				<ul>
					<li>
						<div class="contenuBarreMenu">

							<div class="btn-navigation">
								<div class="barre"></div>
								<div class="barre"></div>
								<div class="barre"></div>
							</div>
						</div>
					</li>
					<li>
						<a class="lienBarreMenu" id="menuAglo" href="www.google.fr">Algo</a>
					</li>
					<li>
						<a class="lienBarreMenu" id="menuLaPoste" href="www.google.fr">La Poste</a>
					</li>
				</ul>

		</nav>

		<nav class="navigation">

			<div class="bgmenuProfil">
				<img id="photoBgmenu" src="imgs/photo_profil.png" alt="Photo de profil">
			</div>

			<div class="bgmenuPresentation">
				<p id="nom">Ivann GALIC</p>
				<p id="dev">Développeur en formation<br> CODING FACTORY by ITESCIA</p>
				<a href="https://github.com/ivann-galic/cv_ivann_galic.git"><i class="fab fa-linkedin-in"></i></a>
				<a href="https://github.com/ivann-galic/cv_ivann_galic.git"><i class="fab fa-github"></i></a>
			</div>

			<div class="bgmenuSectionLiens">

				<ul>
					<li>
						<a class="lienAlgo" href="www.google.fr">Algo</a>
					</li>
					<li>
						<a class="lienLaPoste" href="www.google.fr">La Poste</a>
					</li>
					</li>
				</ul>
			</div>

				<button class="btnTelecharger">
					<a href="src/cv_ivann_galic.pdf">
						<p><i class="fas fa-arrow-circle-down"></i></p>
						<p>Télécharger CV</p>
					</a>
				</button>
		</nav>

	</header>'
?>