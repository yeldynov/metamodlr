<?php 
  session_start();

  if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email'])) { 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>Login</title>

    <!--CSS -->
    <link rel="icon" href="images/favicon.ico" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Logo Slider CSS-->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">

    <!-- Add custom CSS here -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style>#email, #password {margin-bottom:10px;} .tl-mgn-bottom{margin-bottom:20px;}</style>

    <!---
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    -->
</head>

<body>

<!-- TOP BAR -->
<div id="main-nav" class="navbar navbar-default bs-docs-nav" role="banner">
    <div class="container">
        <div class="navbar-header responsive-logo">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse">
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
                <li><a href="contact.php">CONTACT</a></li>
                <li class="active"><a href="login.php">LOGIN</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- TOP BAR END-->

<!--START: BANNER-->
<section class="banner-section-login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h1 class="page-title">Login</h1>
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
<!--
<section class="login-form-box tl-mgn-bottom">
    <div class="container">
        <div class="row">
			<div class="col-md-12">
                <div class="tl-msg alert"></div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <form action="" method="post" id="tl-login-form">
                    <div class="form-group">
                        <label for="fname">Email</label>
                        <input type="text" name="email" id="email" class="form-control" >
						<div class="alert"></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" >
						<div class="alert"></div>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" id="login_btn" type="submit">LOG IN</button>
                    </div>
                </form>
                <p class="login-register-lost-password"><a href="lost-password.html">Lost your password?</a></p>
            </div>
        </div>
    </div>
</section>
-->



<!--BEGIN: FORM-->
<section class="login-form-box tl-mgn-bottom">
      <div class="container">
      <!--
      <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
      -->
      <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <form class="p-5 rounded shadow" action="auth.php" method="post" 
              style="width: 30rem">
            <!--
            <h1 class="text-center pb-5 display-4">LOGIN</h1>
            -->
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
              <?=htmlspecialchars($_GET['error'])?>
            </div>
            <?php } ?>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" 
                   value="<?php if(isset($_GET['email']))echo(htmlspecialchars($_GET['email'])) ?>" 
                   class="form-control" 
                   id="exampleInputEmail1" aria-describedby="emailHelp">
          </div><br />
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" 
                   id="exampleInputPassword1">
          </div>
          <br /><br />
          <button type="submit" class="btn btn-primary">LOGIN</button>
        </form>
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
<script src="js/slick.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--
<script>
	$(document).ready(function() {
		$('#tl-login-form').submit(function() {
		$('.alert, .msg').removeClass('alert-warning alert-danger alert-success');
		$('.alert, .msg').hide();
			form = true;
			elm = $(this);
		email = $('#email').val();
		password = $('#password').val();

		email_regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

			if( email == ''){
				$('#email').next().addClass('alert-warning').html('Please enter your email address.').show();
					form = false;
			}else if(email_regex.test(email) == false){
				$('#email').next().addClass('alert-warning').html('*Please enter a valid Email address.').show();
					form = false;
			}
			if( password == ''){
				$('#password').next().addClass('alert-warning').html('Password is required.').show();
					form = false;
			}
			if(form){
				$.ajax({
					url:'login.php',
					type:'post',
					data: $('#tl-login-form').serialize(),
					success: function(res){
						if(res=='ok'){
							$('.tl-msg').addClass('alert-success').html('Success! You have been loged in successfuly.').show();
							setTimeout(function() {
								window.location.replace("http://metamodelr.com/knowledge.html");
							}, 3000);

						}else{
							$('.tl-msg').addClass('alert-danger').html('Invalid Email and/or password! Please contact us for support.').show();
							setTimeout(function() {
								//window.location.replace("http://metamodelr.com/contact.html");
							}, 3000);
						}
						setTimeout(function() {
						$('.alert').fadeOut('fast');
						}, 30000);
						$('#tl-lost-password')[0].reset();
					}
				});
					}
			
			return false;

		   });
 
	   });
   
</script> 
-->
</body>
</html>

<?php 
}else {
   header("Location: index.php");
}
 ?>