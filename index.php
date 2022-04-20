<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Taxi Abdel, taxi abdel, taxiabdel, taxi conventionné, transport taxi, taxi ameli, 
		conventionné taxi, réserver taxi, réserver taxi conventionné, réserver taxi abdel, réservation taxi, 
		réservation taxi conventionné, réservation taxi abdel, réservation taxi améli, réserver Taxi Abdel, 
		réservation Taxi Abdel">
	<meta name="description"
		content="Un site de réservation en ligne de taxi conventionné, au compte de Taxi Abdel, pour tous types de transport.">
	<meta name="revised" content="03/03/2002">

	<title>Taxi Abdel</title>

	<link rel="stylesheet" type="text/css" href="/css/style.css" media="screen"/>
	<link rel="shortcut icon" type="image/x-icon" href="/images/tl-service-conventionne-logo.png" />
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&display=swap');
	</style>

	<meta name="google-site-verification" content="JnDjspboJ7D4NSQpFc7I9S2DtmHxVvHowkffpsHe2P0" />
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<script src="/script/script.js"></script>

</head>

<body class="flex">

	<!-- Premier bloc : barre de navigation -->
	<nav id="navBar" class="flex">
		<div class="blocNav">
			<div id="logoConvention">
				<img src="/images/tl-service-conventionne-logo.png" alt="logo convention">
			</div>
			<ul id="navBarText" class="flex">
				<li><a href="#accueil">ACCUEIL</a></li>

				<li><a href="#services">SERVICES</a></li>

				<li><a href="#histoire">AVANTAGES</a></li>

				<li><a href="#contact">CONTACT</a></li>
			</ul>
			<a href="tel:+0631752852">
				<div id="numTelNav" class="flex">
					<div id="logoTel">
						<img src="/images/tellogloblanc.png" alt="logotelblanc">
					</div>
					06 31 75 28 52
				</div>
			</a>
		</div>
	</nav>

	<!-- Pas encore fait -->
	<div id="chatBox"></div>

	<!-- Bouton pour revenir en haut -->
	<div>
		<button onclick="topFunction()" id="myBtn"><img src="/images/icons8-fleche-haut-64.png" alt=""></button>
	</div>

	<!-- Second bloc : accueil -->
	<section id="accueil" class="flex">
		<div class="flex firstBlock">
			<div class="flex" id="divTitre">
				<div style="margin: 0 0 10px 0;">
					<h1 style="font-size: larger; font-weight: 400;">TAXI CONVENTIONNÉ</h1>
				</div>
				<div style="margin: 0 0 10px 0;">
					<h1 style="font-size: xx-large;">TAXI ABDEL</h1>
				</div>
				<div class="firstP">
					<p style="letter-spacing: 1px; text-align: justify;">Réserver un taxi
						conventionné en appelant le <a href="tel:+0631 752852"
							class="linkNum"><b>06 31 75 28 52</b></a>, à cette adresse mail
						<a href="mailto:taxiabdel1978@gmail.com"
							class="linkNum"><b>taxiabdel1978@gmail.com</b></a>
						ou en quelques
						clics sur notre site. Votre taxi conventionné vient à votre domicile et
						vous dépose sur votre lieu rendez-vous.</p>
				</div>
			</div>

			<div class="form1">
				<form action="index.php" method="POST" id="formReservation" class="flex">

					<div class="flex" style="margin-bottom: 10px;"><label></label>
					</div>
					<div class="input2div"><input type="text" id="prenom" name="prenom"
							class="input1" required placeholder="Prénom*"></div>

					<div class="flex" style="margin-bottom: 10px;"><label></label>
					</div>
					<div class="input2div"><input type="text" id="nom" name="nom" class="input1"
							required placeholder="Nom*"></div>

					<div class="flex" style="margin-bottom: 10px;"><label></label>
					</div>
					<div class="input2div"><input type="email" id="email_addr" name="email_addr"
							required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
							class="input1" placeholder="email@email.fr*"></div>

					<div class="flex" style="margin-top: 10px;"><label>Confirmez l'adresse e-mail
							:</label>
						<div style="color: rgb(255, 0, 0); padding-left: 2px;">*
						</div>

					</div>
					<div class="input2div"><input type="email" id="email_addr_repeat"
							name="email_addr_repeat" required oninput="check(this)"
							pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="input1"
							placeholder="email@email.fr*"></div>

					<div class="flex" style="margin-top: 15px;"><label>Numéro de sécurité sociale :
						</label></div>
					<div class="input2div"><input type="text" id="num_secu" name="num_secu"
							class="input1" placeholder="x-xx-xx-xx-xxx-xxx" maxlength="13">
					</div>

					<div class="flex" style="margin-top: 10px;"><label>Adresse de départ :</label>
						<div style="color: rgb(255, 0, 0); padding-left: 2px;">*
						</div>
					</div>
					<div class="input2div"><input type="text" id="adr_dep" name="adr_dep" required
							class="input1" placeholder="68 rue du général leclerc"></div>

					<div class="flex" style="margin-top: 15px;"><label>Date :</label>
						<div style="color: rgb(255, 0, 0); padding-left: 2px;">*
						</div>
					</div>
					<div class="input2div"><input type="date" id="date" name="date" class="input1"
							required><span class="open-button">
							<button type="button">📅</button>
						</span></div>

					<div class="flex"><label>Adresse de destination :</label>
						<div style="color: rgb(255, 0, 0); padding-left: 2px;">*
						</div>
					</div>
					<div class="input2div"><input type="text" id="adr_des" name="adr_des"
							class="input1" required
							placeholder="142 Av. des Champs-Elysées">
					</div>

					<div class="flex" style="margin-top: 10px;"><label>Heure de votre rendez-vous
							:</label>
						<div style="color: rgb(255, 0, 0); padding-left: 2px;">*
						</div>
					</div>
					<div class="input2div"><input type="text" id="heure" name="heure" class="input1"
							required placeholder="10h45"></div>

					<div class="input2div" style="margin-top: 10px; margin-bottom: 10px;"><input
							type="submit" name="submit" value="Effectuer la réservation"
							class="submit2" id="btnForm1" />
					</div> 
				</form>
				<?php

					if(isset($_POST['submit'])){
					ini_set( 'display_errors', 1 );
					error_reporting( E_ALL );

					$to = "taxiabdel1978@gmail.com"; // this is your Email address
					$from = $_POST['email_addr']; // this is the sender's Email address

					$first_name = $_POST['prenom'];
					$last_name = $_POST['nom'];
					$num_secu = $_POST['num_secu'];
					$adr_dep = $_POST['adr_dep'];
					$date = $_POST['date'];
					$adr_des = $_POST['adr_des'];
					$heure = $_POST['heure'];

					$subject = "Réservation";
					$subject2 = "Copie de votre réservation";
					$message = $first_name . " " . $last_name . " souhaite réserver une course : " . "\n\n" . "- adresse mail : " . $from . "\n" . "- numéro de sécurité social : " . $num_secu . "\n" . "- adresse de départ : " . $adr_dep . "\n" . "- date : " . $date . "\n" . "- adresse de destination : " . $adr_des . "\n" . "- heure : " . $heure;
					$message2 = "Bonjour " . $first_name .",". "\n\n" . "Merci d'avoir choisi Taxi Abdel pour effectuer une réservation. Voici le récapitulatif de votre réservation :" . "\n\n" . $message . "\n\n" . "Pour plus d'information, n'hésitez pas à contacter le 06 31 75 28 52 ou bien à renvoyer un mail à " . $to . ".";

					$headers = "De:" . $from;
					$headers2 = "De:" . $to;


					mail($to,$subject,$message,$headers);
					mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
					// echo "Réservation envoyée. Merci " . $first_name . ", nous vous contacterons sous peu.";
					}

				?>
			</div>
		</div>

		<div style="width : 60%; max-width : 900px;">
			<img src="/images/toyota_hybride_profile.png" alt="toyota hybride profile">
		</div>
	</section>

	<!-- Troisième bloc : services -->
	<section id="services" class="flex">
		<div class="titre2" style="margin-bottom: 20px;">
			<h1 style="margin-bottom: 30px;">SERVICES</h1>
			<div class="trait" style="background-color: white;"></div>
		</div>



		<div id="service" class="flex">

			<div class="block1 flex">
				<div class="logo"><img src="/images/avion.png" alt="image avion"
						style="background-color: white; border: 0px solid white; border-radius: 50%;">
				</div>
				<div class="logo"><img src="/images/gare.png" alt="image gare"
						style="background-color: white; border: 0px solid white; border-radius: 50%;">
				</div>
				<div class="logo"><img src="/images/hopital.png" alt="image hopital"
						style="background-color: white; border: 0px solid white; border-radius: 50%;">
				</div>
				<div class="logo"><img src="/images/taxi-avant.png" alt="image taxi avant"
						style="background-color: white; border: 0px solid white; border-radius: 50%;">
				</div>
			</div>
			<div class="block1 flex">
				<div class="nomService">
					<p><b>TRANSFERT AÉROPORT</b></p>
				</div>
				<div class="nomService">
					<p><b>TRANSFERT GARE</b></p>
				</div>
				<div class="nomService">
					<p><b>TAXI CONVENTIONNÉ</b></p>
				</div>
				<div class="nomService">
					<p><b>CONFORT ET SÉCURITÉ</b></p>
				</div>
			</div>
			<div class="block1 flex">
				<div class="descriptionService">
					<p>Déplacez vous d'un aéroport à une adresse souhaitée.</p>
				</div>
				<div class="descriptionService">
					<p>Déplacez vous d'une gare à une adresse souhaitée.</p>
				</div>
				<div class="descriptionService">
					<p>Pour tous vos déplacements réguliers vers les hôpitaux dans toute la région.
					</p>
				</div>
				<div class="descriptionService">
					<p>Taxi Abdel vous transporte avec le confort et la sécurité. La sécurité est
						notre priorité.</p>
				</div>
			</div>
		</div>
		<!-- /13 -->

	</section>


	<!-- Quatrième bloc : histoire -->
	<section id="histoire" class="flex"
		style="background-image: url('/images/2018-quatrefoil-background-white-1.jpg'); background-attachment: fixed;">
		<div class="blocBlanc1 flex">
			<div class="titre2">
				<h1 style="margin-bottom: 10px;">AVANTAGES TAXI CONVENTIONNÉ</h1>
			</div>
			<div class="trait"></div>
			<!-- <div id="paragraphes"> -->
			<div id="paragraphe1" class="flex">
				<ul class="p" style="list-style: disc;">
					<li class="flex start liAvantage">
						<p style="margin: 0 0 6px 0;">Transports liés à une entrée et/ou une
							sortie d’hospitalisation.
						</p>
					</li>
					<li class="flex start liAvantage">
						<p style="margin: 0 0 6px 0;">Transports liés aux traitements des
							affections de longue durée (ALD).
						</p>
					</li>
					<li class="flex start liAvantage">
						<p style="margin: 0 0 0px 0;">Transports liés aux traitements des
							accidents du travail ou des maladies professionnelle.</p>
					</li>
					<li class="flex start liAvantage">
						<p style="margin: 0 0 0px 0;">Un transport médical longue distance.
						</p>
					</li>
				</ul>
			</div>
			<div id="paragraphe2" class="flex">
				<p class="p" style="margin: 0%;">Si vous utilisez un taxi non conventionné, le coût de
					votre déplacement ne sera pas du tout remboursé par l’Assurance Maladie et
					restera intégralement à votre charge.</p>
			</div>
			<div id="ameli" style="position: relative;"><img src="/images/Ameli.svg" alt=""
					style="margin-top:20px;"></div>
		</div>
	</section>

	<!-- Cinquième bloc : vide -->
	<div id="vide">
		<div class="vide"
			style="background-image: url('/images/depositphotos_387699394-stock-photo-dark-black-geometric-grid-carbon.jpg'); width: 100%; height: 100%; background-attachment: fixed;">
		</div>
	</div>

	<!-- Sixième bloc : contact -->
	<section id="contact" class="flex"
		style="background-image: url('/images/2018-quatrefoil-background-white-1.jpg'); background-attachment: fixed;">
		<div class="img1" style="max-width : 700px;">
			<img src="/images/toyota_hybride_front.png" alt="logo_taxi">
		</div>

		<div class="blocBlanc2 flex">
			<div id="fifth_FirstItem" class="flex">
				<div class="titre2" style="margin-bottom: 20px; font-size: 16px;">
					<h1>ME CONTACTER</h1>
				</div>
				<div class="trait"></div>
			</div>

			<div id="fifth_SecondItem" class="flex">
				<div id="leftItem">
					<div>
						<p style="margin:1px;">53 route de Saint Leu</p>
						<p style="margin:1px;">95600 Eaubonne, France</p>
					</div>

					<div>
						<p>aboumeymoun@hotmail.fr</p>
					</div>

					<div>
						<p>Tél : 06 31 75 28 52</p>
					</div>

					<div>
						<p>HORAIRES :</p>
					</div>

					<div style="display: flex; flex-direction: column;">
						<p style="margin:2px;">Lundi - Vendredi : 7h00 - 23h00
						</p>
						<p style="margin:2px;">Samedi : 7h00 - 23h00</p>
						<p style="margin:2px;">Dimanche : 8h00 - 23h00</p>
					</div>
				</div>
				<div id="rightItem">
					<form method="POST" action="index.php">
						<div class="flex formulaire2">
							<div class="formText2"><label for="">Prénom :</label>
							</div>
							<div class="input2div"><input type="text" name="prenom"
									id="prenom" required class="input2"
									placeholder="Prénom"></div>
						</div>
						<div class="flex formulaire2" style="margin-top: 10px;">
							<div class="formText2"><label for="">Nom de famille :</label>
							</div>
							<div class="input2div"><input type="text" name="nom" id="nom"
									required class="input2" placeholder="Nom"></div>
						</div>
						<div class="flex formulaire2" style="margin-top: 10px;">
							<div class="formText2 flex">
								<!-- style="flex-direction: row; width: 100%; justify-content: flex-start;" -->
								<label for="">E-mail :</label>
								<div style="color: rgb(255, 0, 0); padding-left: 2px;">*
								</div>

							</div>
							<div class="input2div"><input type="email" name="email"
									id="email" class="input2" required
									placeholder="email@email.fr"></div>
						</div>
						<div class="flex formulaire2" style="margin-top: 10px;">

							<div class="formText2"><label for="">Objet :</label></div>
							<div class="input2div"><input type="text" name="objet"
									id="objet" class="input2"
									placeholder="Réservation"></div>
						</div>

						<div class="flex formulaire2" style="height:155px; margin-top: 10px;">
							<div class="formText2"><label for="">Message :</label></div>
							<div class="input2div">
								<textarea name="text_area" id="message" required
									class="input2"
									style="height: 120px; border-top: 2px solid #000000;"
									rows="5" cols="33"
									placeholder="Bonjour, je souhaiterais réserver un taxi pour un transport non médicalisé/médicalisé à destination de..."></textarea>
							</div>
						</div>
						<div class="input2div" id="button" style="margin-top: 15px;">
							<button type="submit" class="submit2"
								id="btnForm2" name="submit2">Envoyer</button></div>
					</form>
					<?php

						if(isset($_POST['submit2'])){
						ini_set( 'display_errors', 1 );
						error_reporting( E_ALL );

						$to = "taxiabdel1978@gmail.com"; // this is your Email address
						$from = htmlspecialchars($_POST['email']); // this is the sender's Email address

						$first_name = htmlspecialchars($_POST['prenom']);
						$last_name = htmlspecialchars($_POST['nom']);
						
						$text_area = htmlspecialchars($_POST['text_area']);

						$subject = htmlspecialchars($_POST['objet']);
						$subject2 = "Copie de " . $subject;
						$message = $first_name . " " . $last_name . " vous a envoyé un message : " . "\n\n" . "- adresse mail : " . $from . "\n" . $text_area;
						$message2 = "Bonjour " . $first_name .",". "\n\n" . "Merci d'avoir contacté Taxi Abdel, nous vous répondrons sous peu. Voici le récapitulatif de votre message :" . "\n\n" . $message . "\n\n" . "Pour plus d'information, n'hésitez pas à contacter le 06 31 75 28 52 ou bien à renvoyer un mail à " . $to . ".";

						$headers = "De:" . $from;
						$headers2 = "De:" . $to;


						mail($to,$subject,$message,$headers);
						mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
						// echo "Réservation envoyée. Merci " . $first_name . ", nous vous contacterons sous peu.";
						}

					?>
				</div>
			</div>
		</div>
	</section>

	<!-- Septième bloc : contact -->
	<footer id="footer" class="flex">
		<div id="footer_logo" class="flex">
			<div class="socialLogo1"><a href="https://www.facebook.com/Taxi-Abdel-104431115569060/">
					<img src="/images/logo_facebook.png" alt="social1"></a></div>

			<div class="socialLogo1"><a href="https://twitter.com/TaxiAbdel">
					<img src="/images/logo_twitter.png" alt="social2"></a></div>

			<div class="socialLogo1"><a href="https://www.instagram.com/?hl=fr">
					<img src="/images/logo_insta.png" alt="social3"></a></div>
		</div>



		<div id="footerBar" class="flex">

			<a href="https://www.ameli.fr/" target="_blank">
				<p>Ameli</p>
			</a>

			<a href="">
				<p>Mentions légales</p>
			</a>
			<!-- <a href="">
				<p>Politique en matière de cookies</p>
			</a> -->
			<a href="">
				<p>Politique de confidentialité</p>
			</a>
			<a href="">
				<p>Conditions d'utilisation</p>
			</a>
		</div>
		<div style="width: 75%; text-align: center; display: none;">Tags: Taxi Abdel, taxi abdel, taxiabdel,
			taxi conventionné,
			transport taxi,
			taxi ameli,
			conventionné taxi, réserver taxi, réserver taxi conventionné, réserver taxi abdel,
			réservation taxi, réservation taxi conventionné, réservation taxi abdel, réservation
			taxi améli, réserver Taxi Abdel, réservation Taxi Abdel</div>
		<div id="copyright">
			<p>© 2022 par Taxi Abdel. Tous droits réservés.</p>
		</div>
		<div style="display: none;">
			<a href="https://fr.vecteezy.com/vecteur-libre/illustration">Illustration Vecteurs par
				Vecteezy</a>
			<a target="_blank" href="https://icones8.fr/icon/26124/fl%C3%A8che-haut">Flèche haut</a> icône
			par <a target="_blank" href="https://icones8.fr">Icons8</a>

		</div>
	</footer>

</body>

</html>