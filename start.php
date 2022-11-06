<?php session_start(); ?>



<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="description" content="Sei ein Teil von dem gr��ten Bierballzusammenschlu� in ganz Deutschland." />
		<meta name="keywords" content="Bierball, Flunkyball, Turnier, Dresden, Berlin, Bier, Sterni, Sternburg" />
		<meta name="author" content="Jonathan Felsmann" />
		<meta name="copyright" content="Jonathan Felsmann" />
		<meta name="publisher" content="N.B.B.L - Team" />
		<title>Bierball - Turniere</title>
        <lin href="https://blankiball.de/images/hermann_logo/export.png="shortcut icon"  type="image/x-icon" />
        <link href="https://blankiball.de/images/hermann_logo/export.png" rel="icon" type="image/x-icon" />

		<link rel="icon" type="image/png" href="bilder\nbbl-logo">
		<link href="start.css" rel="stylesheet" type="text/css" media="screen" />

	</head>
	
	<body background="bilder\bier.jpg" size="cover"> 

		<body>

		<h1> geht doch alles </h1>
		
		<div id="head_container"> 
			<div id="header"> <span class="Stil1">&raquo;</span> N.B.B.L - Startseite <span class="Stil1">&laquo;</span>
			</div>
			<!-- ende header -->
		

 

<div id="nbbl_logo">
	<a href="impressum.php"><img src="bilder\wgwa-schwebend-logo.png" height="320" center></a>
	<a href="impressum.php"><img src="bilder\nbbl-logo.png" height="300"></a>
	<a href="impressum.php"><img src="bilder\ringbahn.jpg" height="250"></a>
</div>



			
			<!-- Countdown -->		
		
		<?php
//Endzeitpunkt
$endTime = mktime(12, 00, 0, 12, 07, 2022); //Stunde, Minute, Sekunde, Monat, Tag, Jahr;

//Aktuellezeit von microtimestamps
$timeNow = microtime(true);

//Berechnet differenz
$diffTime = $endTime - $timeNow;

//Zerlegt $diffTime, rundet 2 Stellen und gibt aus
$milli = explode(".", round($diffTime, 2));

//Berechnung f�r Tage, Stunden, Minuten
$day = floor($diffTime / (24*3600));
$diffTime = $diffTime % (24*3600);
$houre = floor($diffTime / (60*60));
$diffTime = $diffTime % (60*60);
$min = floor($diffTime / 60);
$sec = $diffTime % 60;

//Ausgabe von $day (Tage), $houre (Stunden), $sec (Sekunden), $millisec
echo $day." Tage ";
echo $houre." Stunden ";
echo $min." Minuten ";
echo $sec." Sec ";
?> 

<!--nav bar -->

<div id= "nav_bar"> 

<a href="index.php"><button id="btn_nav_bar" ><img src="bilder\nbbl-logo" max height="100%" max width="100%"></button>
    
</a>
<a href="season_overview.php"><button id="btn_nav_bar" >Season Übersicht</button></a>
<a href="team_overview.php"><button id="btn_nav_bar">Teamübersicht</button></a>
<a href= "team_registration.php"><button id="btn_nav_bar">Teamanmeldung</button></a>
<a href= "impressum.php"><button id="btn_nav_bar">Impressum</button></a>


</div>


<!-- ende nav_bar -->

<p> <video width="320" height="240" controls>
<source src="IMG_0525.mov" type="video/mov">
Video vom bierballturneir
</video>

	<!-- ende head container -->		
		</div>
		<div id="main_container">
			<div id="main">
			
			
			</div>
		
	

<div id="infotext1">
Hier kommen alle Infos rein. 
Die frage aller Fragen.
</div>








			</div><!-- ende main -->
			
		</div><!-- ende main container -->
		<div id="footer_container">
			<div id="footer">Alle hier auf der Webseite entstandenden Fehler weisen wir komplett zurück. </br>
			(C) 2022 REFELS GmbH
			</div><!-- ende footer -->
		</div><!-- ende footer container -->
	</body>
</html>