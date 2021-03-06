<?php include_once('index_action.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>A Semana: PHP</title>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />  
		<link href="../css/style.css" rel="stylesheet"/>   
		<link href="../css/colors/style-color-01.css" rel="stylesheet"/>
		<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>-->
		<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "7a11cad4-3b7d-4eb1-b375-07425ea08200", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	</head> 
	<body>
		<div id="wrapper">

			<nav>
				<section>
					<h2 class="menulink close"><a href="#">Close</a></h2>
					<div class="clearfix"></div>
					<h2>Navigation</h2>
					<ul>
						<li><a href="http://www.asemanaphp.com.br">Home</a></li>
						<li><a href="http://eltonminetto.net">Autor</a></li> 
						<li><a href="http://www.asemanaphp.com.br/edicoes">Edições passadas</a></li> 
						<li><a href="mailto:eminetto@gmail.com">Contato</a></li> 
					</ul>
					<div class="clearfix"></div> 
				</section>
			</nav>
		</div>

		<div class="left">
		
			<h2 class="menulink hamburger"><a href="#">Menu</a></h2>
		
			<section>
				<h1 class="logo"><a href="#"><img src="../css/colors/logos/logo_01.png" alt="Subscribe" /></a></h1>
				<h2 style="font-weight:700;">A SEMANA: PHP</h2>
				<h3>Newsletter semanal com tópicos selecionados sobre PHP</h3> 
				<span class='st_facebook_vcount' displayText='Facebook'></span>
				<span class='st_twitter_vcount' displayText='Tweet'></span>
				<span class='st_linkedin_vcount' displayText='LinkedIn'></span>
				<span class='st_email_vcount' displayText='Email'></span>
			</section>
			
		</div>

		<div class="right">
			<section>
				<h3 class="subpage_title">Edições anteriores</h3>
				<ul>
				    <?php $i = 1; ?>
					<?php foreach ($files as $file){ ?>
							<li><a class="subpage_links" target="_blank" href="<?=$file?>">Edição <?=$i?></a></li>
							<?php $i++; ?>
					<?php } ?>
				</ul>
			</section>
		</div>

		<script src="../js/jquery.min.js"></script>
		<script src="../js/respond.min.js"></script>
		<script src="../js/scripts.js"></script>  
		<script src="../js/jquery.form.js"></script>
		<script src="../js/jquery.validate.min.js"></script>
		<script src="../js/contact.js"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-584603-27', 'auto');
		  ga('send', 'pageview');

		</script>
	</body>
</html>