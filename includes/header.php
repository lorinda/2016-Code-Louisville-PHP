<!DOCTYPE html>
<html>
	<head>
		<!--Character encoding-->
		<meta charset="utf-8">
		<!-- Browser tab icon-->
		<link href="images/browser_icon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
		<!--For different screen sizes-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		
		<!--CSS for Bootstrap-->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <!--Font: Google-Lato-->
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' 
              rel='stylesheet' type='text/css' >
        <!--Site-specific CSS-->
        <link rel="stylesheet" href="css/styles.css">
	
		
		<!--JavaScript jQuery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!--JavaScript JavaScript for mobile menu-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" 
                integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous">
        </script>
		<script src="js/displayFade.js" type="text/javascript"></script>
		
		<script>
		<!--Changes menu item color to red on hover/ black on move-->
			$(document).ready(function(){
				$('.menu-item').hover(function(){
					$(this).css('color','red');
				},function(){
					$(this).css('color','black');
				});
			});
		</script>
		<script>
			<!--Minimizes mobile menu on item click-->
			jQuery(function() {
				jQuery('.nav a').on('click', function(){ 
					if(jQuery('.navbar-toggle').css('display') !='none'){
						jQuery(".navbar-toggle").trigger( "click" );
					}
				});
			});
		</script>
     
		
		<title><?php echo "Stokes &amp; Glass Law Firm"; ?></title>
	  
	</head>
	<body> 
		<div>
			<!-- Navigation using Bootstrap-->
			    <nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
							<!--Screen readers only say Toggle navigation-->
							<span class="sr-only">Toggle navigation</span>
							<!--The tree lines in mobile menu selector-->
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<span class="site-title"><img src="images/SG_logo_40.png">STOKES &amp; GLASS, PLLC
						</span>
					</div>
					
					<!-- Collection of nav links and other content for toggling -->
					<div id="navbarCollapse" class="collapse navbar-collapse pull-right fixed">
					  <ul class="nav navbar-nav">
						<li><a href="index.php#" class="menu-item">HOME</a></li>
						<li><a href="index.php#the_firm" class="menu-item">THE FIRM</a></li>
						<li><a href="index.php#practice" class="menu-item">PRACTICE AREAS</a></li>
				        <li><a href="index.php#our_attorneys" class="menu-item">OUR ATTORNEYS</a></li>
						<li><a href="index.php#footer" class="menu-item">CONTACT INFO</a></li>
                        <li class="call_now"><a href="tel:1-901-401-1000"><b>CALL NOW: (901) 401-1000</b></a></li>
						<li><a href="https://www.facebook.com/Stokes-Glass-PLLC-107315929290734/"><img src="images/FB-f-Logo__blue_29_grey.png" id="facebook" 
							onmouseover="this.src='images/FB-f-Logo__blue_29.png';" onmouseout="this.src='images/FB-f-Logo__blue_29_grey.png';"></a></li>
						<li><a href="https://twitter.com/stokesglasslaw"><img src="images/TwitterLogo_29_grey.png" id="twitter"
							onmouseover="this.src='images/TwitterLogo_29.png';" onmouseout="this.src='images/TwitterLogo_29_grey.png';"></a></li>
					 </ul>
					</div>
				</div><!--end Container-fluid-->
			</nav><!--end navigation-->

<!-- Scroll Down For More Graphic placed in scrolldown.php-->

        <div id="wrapper"> 
            <!--main body div-->