<!doctype html>
<html>
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>Contact</title>

    <!--CSS -->
    <link rel="icon" href="images/favicon.ico" type="image/png" sizes="16x16">
    <link rel="stylesheet"  href="css/font-awesome.min.css">
    <link rel="stylesheet"  href="css/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Logo Slider CSS-->
    <link rel="stylesheet"  href="css/slick.css">
    <link rel="stylesheet"  href="css/slick-theme.css">

    <!-- Add custom CSS here -->
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet"  href="css/responsive.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<style> .tl-error {border:1px solid red !important;} .tl-error-msg, .tl-error-captcha {color:red; display:none;}	</style>
</head>

<body>

<!-- TOP BAR -->
<div id="main-nav" class="navbar navbar-default bs-docs-nav" role="banner">
    <div class="container">
        <div class="navbar-header responsive-logo">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                    data-target="#bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">
                <a href="index.php"><img src="images/metamodelr_logo.png" alt="logo" class="img-responsive"></a>

            </div>
        </div>
        <nav class="navbar-collapse collapse navbar-right" role="navigation" id="bs-navbar-collapse">
            <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="consulting.php">CONSULTING</a></li>
                <li><a href="solutions.php">SOLUTIONS</a></li>
                <li class="active"><a href="contact.php">CONTACT</a></li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- TOP BAR END-->

<!--START: BANNER-->
<section class="banner-section-contact">
<div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h1 class="page-title">Contact</h1>
            </div>
            <div class="col-md-6 col-sm-6 hidden-xs login-breadcrumb">
                <ol class="breadcrumb">
                    <!--
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Login</a></li>
                    -->
                </ol>
            </div>
        </div>
    </div>
</section>
<!--END: BANNER-->

<!--START: FORM-->
<section class="contact-form-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 contact-info">

                <h3 class="tw-title">Other Information</h3>

                <div class="tw-title-border"></div>
                <div class="clearfix"></div>
                <p>Please use this contact form if you have any questions or requests, concerning our services.</p>

                <p>We will respond to your message within 24 hours.</p>
            </div>

            <div class="col-md-8 col-sm-8 col-xs-12 contact-form">
                <div class="col-md-12">
                    <h3 class="tw-title">Get in Touch</h3>

                    <div class="tw-title-border"></div>
                </div>
                <div class="clearfix"></div>

                <form action="" method="post" id="contact-form">

                    <div class="col-md-6 form-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" >
							<div class="tl-error-msg"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" >
						<div class="tl-error-msg"></div>
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea name="message" id="message" rows="7" class="form-control" placeholder="Your Message"></textarea>
						<div class="tl-error-msg"></div>
                    </div>
                    <div class="col-md-12 form-group">
						<div class="g-recaptcha" data-sitekey="6LdCXB0UAAAAAJD3DSsL8tNSLFjrdR1d-caBIgSf"></div>
                        <div class="tl-error-captcha"></div>
                    </div>
                    <div class="col-md-12 form-group">
                        <button  class="btn btn-default" type="submit" id="btn_submit" type="submit">SEND</button>
                        <div class="clearfix"></div>

                        <br><br>
                        <!-- Success message -->
                        <div class="alert alert-success" id="success_message" style="display:none;">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

                    </div>

                </form>
                            </div>
        </div>
    </div>
</section>

<!--END: FORM-->


<!--START: FOOTER-->
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="footer-logo">
                            <img src="images/metamodelr_logo2.png" class="img-responsive" alt="">
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <p>MetamodelR is a division of Credience Corporation (ABN: 89 128 863 945, ACN: 128 863 945) is an Australian based
                            data science and data engineering software development company.</p>
                        <br>
                        <p>MetamodelR treats the data privacy and data security of its clients and associated entities very seriously, by adhering to ISO 27701 and ISO 27001 standards, respectively. If you believe that your data is compromised, please contact us, either to report a breach or incident, or for us to help you remedy the situation.</p>
                        <br>

                        <div class="span">
                            <p class="copyright">© 2018 MetamodelR Corporation | <a href="terms.html">Terms &amp;
                                    Conditions</a> | <a href="privacy.html">Privacy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<a id="scrollUp" title="Scroll to top"><i class="fa fa-chevron-up"></i></a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
  	<script>
			$(document).ready(function(){
				$('#contact-form #btn_submit').click(function(){
				console.log("test");
					$('#contact-form .tl-error').removeClass('tl-error');
						$('.tl-error-captcha, .tl-error-msg').hide();
					form = true;
					elm = $(this);
					name = $('#name').val();
					email = $('#email').val();
					message = $('#message').val();
					email_regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  
					if( email == ''){
							$('#email').addClass('tl-error').next().html('Email is required').show();
							form = false;
					
					}else if(email_regex.test(email) == false){
							$('#email').addClass('tl-error').next().html('Please enter a valid email address.').show();
							form = false;
					}
					
					if(name==''){
						$('#name').addClass('tl-error').next().html('name is required').show();
						form = false;
					}
					if(message==''){
						$('#message').addClass('tl-error').next().html('Please enter your message').show();
						form = false;
					}
					

					if(grecaptcha.getResponse() ==""){
						$('.tl-error-captcha').html('*Captcha is required ').show();
						form = false;
					}
					
					
					if(form){
						$.ajax({
							url:'email.php',
							type:'post',
							data: $('#contact-form').serialize(),
							success: function(res){
								$('#success_message').show();
								setTimeout(function() {
								$('#success_message').fadeOut('fast');
								}, 60000); // <-- time in milliseconds
								$('#contact-form')[0].reset();
							}
						});
					}
					return false;
				});
			});
	</script>
</body>
</html>
