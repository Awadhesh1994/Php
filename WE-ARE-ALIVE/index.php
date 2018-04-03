<html lang="en">
	<head>
		<title>
			HOME : : We Are Alive 
		</title>
		<!--css file used-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="fonts/" rel="text/fonts"/>
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/bootstrap-social.css" rel="stylesheet"/>
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet"/>
		<link href="css/responsive.css" rel="stylesheet"/>
		<link href="css/style.css" rel="stylesheet"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="img/logo/logo.png" type="image/icon">
		
		<!-- Google Web Fonts =:= Raleway , Montserrat and Roboto -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:700,500,400' rel='stylesheet' type='text/css'>
		
		<!--Local Css Code Start-->
		
		
		<?php include "css-in header.php"?>
		
		<!--Local Css Code End-->
		
		<!-- AngularJs
		<script src="js/angular.min.js" rel="text/javascript"/>
		-->
		
	</head>
	<body>
		
		<!--start social-header-->
		<?php include "social-header.php"?>
		<!--end social-header-->
					
		<!--start header-->
		<?php include "menu-header.php"?>
		<!--end header.php-->
			
		<!--start slider-->
		<?php include "slider.php"?>
		<!--end slider-->
		
		<!--start content-->
		<?php include "content.php"?>
		<!--end content-->
				 
		<!--start footer-->
		<?php include "footer.php"?>
		<!--end footer-->
	
		<!--js file used-->
		
		<script src="js/jquery-1.10.2.min.js" rel="text/javascript"/>
		<script src="js/bootstrap.js" rel="text/javascript"/>
		<script src="js/style.js" rel="text/javascript"/>

		<script language="JavaScript" type="text/javascript">
		  $(document).ready(function(){
			$('.carousel').carousel({
			  interval: 2000
			})
		  });    
		</script>
	</body>
</html>