<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title>Association des Étudiants en Informatique - Lille1</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<!-- <link rel="stylesheet" href="css/style.min.css" type="text/css" media="screen"> -->
	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>

  <div class="menu">
    <div class="container clearfix">

      <div id="logo" class="grid_3">
	<img src="images/aei.png">
	L'association des &Eacute;tudiants en Informatique
      </div>

      <div id="nav" class="grid_9 omega">
	<ul class="navigation">
	  <li data-slide="1">Réseaux sociaux</li>
	  <li data-slide="2">&Eacute;vènements</li>
	  <li data-slide="3">Galerie Photos</li>
	  <li data-slide="4">Le bureau</li>
	</ul>
      </div>

    </div>
  </div>


	<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
		<div class="container clearfix">
		  <!--Intégration Twitter -->
		  <div id="inteTwitter">
		    <a class="twitter-timeline" height="400px" width="450px" href="https://twitter.com/AEILille1"  data-widget-id="336853392360103936">Tweets de @AEILille1</a>
		    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		  </div>
		  <!--Fin de l'intégration Twitter-->
		  <br/><br/>
		  <!--Intégration Facebook-->
		  <div id="inteFacebook">
		    <!--<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Faei.lille1&amp;width=350&amp;height=558&amp;show_faces=true&amp;colorscheme=light&amp;stream=true&amp;show_border=true&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:558px;" allowTransparency="true"></iframe>-->
		  </div>
		  <br/><br/><br/><br/>
		  <!--Fin de l'intégration Facebook-->
		  <center><a href="https://twitter.com/AEILille1" target="_blank"><img src="images/twitter.png"></a><a href="https://www.facebook.com/aei.lille1" target="_blank"><img src="images/facebook.png"></a><a href="https://plus.google.com/u/0/112041252934802643801/posts" target="_blank"><img src="images/google.png"></a></center>
		  <p>
		    <center>
		      Vous pouvez retrouver nos documents (notamment les anciens magazines de l'AEI) sur notre <a href="https://github.com/AEILille">github</a>.
		    </center>
		  </p>
		</div>
	</div>



	<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="content" class="grid_12">
				<h1>&Eacute;vènements</h1>
				<?php
				  include("scripts/event.php");
				  show_event();
				?>
			</div>

		</div>
	</div>



	<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
		<div class="container clearfix">
		  <div id="content" class="grid_12">
		    <h1>Galerie Photos</h1>
		      Veuillez cliquer <a style="color: blue;" href="PhotoShow/">ici</a> pour accéder à notre centre de photos en ligne !
		  </div>
		</div>
	</div>



	<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
		<div class="container clearfix">
		   <h1> Le bureau </h1>
		     L'AEI est une association à but non-lucrative, basée sur le campus de Lille1 (rez-de-chaussée du batiment M5) depuis 2007.<br/>
Elle a pour mission de promouvoir, et de supporter, les Technologies de l'Information et de la Communication chez les étudiants, mais aussi les accompagner tout au long de leur parcours scolaire.<br/><br/>
		   <div id="content" class="grid_12">
			    <table>
			      <tr>
				<td><img src="images/benjamin_digeon_gimp.jpg"></td>
				<td><img src="images/boris_couturier_gimp.png"></td>
				<td><img src="images/louis_billiet_gimp.jpg"></td>
				<td><img src="images/arthur_dewarumez_gimp.jpg"></td>
				<td><img src="images/antonin_carette_gimp.jpeg"></td>
				<td></td>
			      </tr>
			    </table>
			    <p>
			      <ul>
				<b>Nos élus, dans l'ordre :</b>
				<li><a href="mailto:president@aei-asso.fr">Digeon Benjamin</a> -- président</li>
				<li><a href="mailto:vice-president@aei-asso.fr">Couturier Boris</a> -- vice-président</li>
				<li><a href="mailto:intendant@aei-asso.fr">Billiet Louis</a> -- intendant</li>
				<li><a href="mailto:tresorier@aei-asso.fr">Dewarumez Arthur</a> -- trésorier</li>
				<li><a href="mailto:secretaire@aei-asso.fr">Carette Antonin</a> -- secrétaire</li>
			      </ul>
			    </p>
			</div>
		</div>
		<center>
		  <footer>
		    <p>Ce site internet est basé sur les technologies libres suivantes : HTML 5, CSS 3, JAVASCRIPT, le framework <a href="http://jalxob.com/cool-kitten/">CoolKitten</a> et <a href="https://code.google.com/p/ics-parser/">Ics-parser</a></p>
		  </footer>
		</center>
	</div>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<!-- <script type="text/javascript" src="js/scripts.min.js"></script> -->
</body>
</html>
