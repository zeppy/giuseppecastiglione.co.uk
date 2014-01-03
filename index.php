<?php session_start(); ?>
<!doctype html>
<!--[if IE 9]>
<html id="ie9" lang="en-UK">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="en-UK">
<![endif]-->
<!--[if lte IE 7]>
<html id="ie7" lang="en-UK">
<![endif]-->
<!--[if IE]>
<html id="ie" lang="en-UK">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-UK">
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<head>
	<!-- INFO -->
	<title>Giuseppe Castiglione - Front-End Developer</title>
	<meta charset="UTF-8" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="initial-scale=1, user-scalable=false;" />
	<meta name="keywords" content="web,developer,html,javascript,css,php,wordpress,seo,giuseppe,castiglione" >
	<meta name="Description" content="Giuseppe Castiglione - Aspiring Front-End Web Developer. Obsessive perfectionist using HTML, CSS &amp; JavaScript to create effective websites.">
	<!-- JS -->
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script type="text/javascript" src="/js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="/js/respond.min.js"></script>
	<![endif]-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
	<script type="text/javascript" src="/js/jquery.viewport.min.js"></script>
	<script type="text/javascript" src="/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="http://flesler-plugins.googlecode.com/files/jquery.scrollTo-1.4.2-min.js"></script>
	<script type="text/javascript" src="http://flesler-plugins.googlecode.com/files/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="/js/script.js"></script>
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-44951384-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
</script>
</head>
<body>
	<div id="preloader">
    <div id="status">&nbsp;</div>
	</div>

	<div class="wrapper">
		<nav>

			<div id="navContent">
			<h1><a href="/"><span>Giuseppe.</span></a></h1>
			<ul class="right">
				<li><a href="#home" class="current">Home</a></li>
				<li><a href="#work">Work</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			</div> <!-- navContent -->
	</nav>


			<div id="page">
	<div id="ieWarning">
		<h2>Hey! Your browsers getting on a bit now.</h2> 
		<h3>How about you let go and <a href="http://windows.microsoft.com/en-us/internet-explorer/ie-10-worldwide-languages">upgrade</a> to a new shiny version?</h2>
	</div>
		<section id="home">
			<div class="content">
				<?php include('inc/section/home.php'); ?>
			</div>
		</section> 
		
		<section id="work">
			<div class="content">
				<?php include('inc/section/work.php'); ?>			
			</div>
		</section>
		
		<section id="contact">
			<div class="content">
				<?php include('inc/section/contact.php'); ?>
			</div>
		</section>
		
			

			
		<footer>
			<p>© 2013 Giuseppe Castiglione</p>
		</footer>
		</div> <!-- page -->
		
	</div> <!-- wrapper -->

	<!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
        $(window).load(function() { 
            $("#status").fadeOut(); 
            $("#preloader").delay(350).fadeOut("slow"); 
        })
    //]]>
</script>
</body>
</html>