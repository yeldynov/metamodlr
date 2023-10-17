<?php 
session_start();
if( !isset($_SESSION['email_user']))
{
    header('Location: signup.html');
}
require("includes/connection.php");
?>
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

    <title>Sign Up</title>

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
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
	<style>#email, #password {margin-bottom:10px;} .tl-mgn-bottom{margin-bottom:20px;}</style>

    <script id="chatBroEmbedCode">
    /* Chatbro Widget Embed Code Start */
    function ChatbroLoader(chats,async){async=!1!==async;var params={embedChatsParameters:chats instanceof Array?chats:[chats],lang:navigator.language||navigator.userLanguage,needLoadCode:'undefined'==typeof Chatbro,embedParamsVersion:localStorage.embedParamsVersion,chatbroScriptVersion:localStorage.chatbroScriptVersion},xhr=new XMLHttpRequest;xhr.withCredentials=!0,xhr.onload=function(){eval(xhr.responseText)},xhr.onerror=function(){console.error('Chatbro loading error')},xhr.open('GET','//www.chatbro.com/embed.js?'+btoa(unescape(encodeURIComponent(JSON.stringify(params)))),async),xhr.send()}
    /* Chatbro Widget Embed Code End */
    ChatbroLoader({encodedChatId: '4t85'});
    </script>
    <style type="text/css">
        label.error {
            color: #ff0000;
            font-weight: normal;
        }
        .error {
            color: #ff0000;
            font-weight: normal;
        }
    </style>
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
                 <a href="index.html"><img src="images/logo.png" alt="logo" class="img-responsive"></a>

            </div>
        </div>
        <nav class="navbar-collapse collapse navbar-right" role="navigation" id="bs-navbar-collapse">
            <ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="trade.html">TRADE</a></li>
                <li><a href="invest.html">INVEST</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li class="active"><a href="login.html">LOGIN</a></li>
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
                <h1 class="page-title">Sign Up</h1>
            </div>
            <div class="col-md-6 col-sm-6 hidden-xs login-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Sign Up</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--END: BANNER-->

<!--START: FORM-->
<section class="login-form-box tl-mgn-bottom">
    <div class="container">
        <div class="row">
			<div class="col-md-12">
                <div class="tl-msg alert"></div>
            </div>
            
			<div class="signup_form">
                <?php 
                $email = $_SESSION['email_user'];
                $query = "SELECT * FROM registration WHERE email = '$email'";
                $result = mysqli_query( $conn, $query);
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class="alert alert-success alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> Your Email ID is verified. Please fill all the details to complete your registration.
                </div>
				<form action="" method="post" id="signup-form" >
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" class="form-control" placeholder="First Name" readonly="" value="<?php echo $row['firstName']; ?>">
                        <div class="alert"></div>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name">
                        <div class="alert"></div>
                    </div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" id="email" class="form-control" placeholder="Email" readonly="" value="<?php echo $row['email']; ?>">
						<span id="email-error" class="error"></span>
					</div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" >
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm Password" >
                    </div>
                    <div class="form-group">
						<label for="address">Address</label>
						<textarea name="address" id="address" class="form-control" placeholder="Address" style="height: 100px;"></textarea>
						<div class="alert"></div>
					</div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" name="amount" id="amount" class="form-control" placeholder="Amount">
                        <div class="alert"></div>
                    </div>
					<label class="error" id="error-msg"></label>
					<div class="form-group">
						<input class="btn btn-default" id="login_btn" type="submit" name="submit" value="SUBMIT">
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
                    <img src="images/logo2.png" class="img-responsive" alt="">
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                        <p>Trading Cryptocurrencies, Forex, Commodities, CFDs and Derivatives carries a high level of risk to your capital and you should only trade with money you can afford to lose. Trading Derivatives may not be suitable for all investors, so
                            please ensure that you fully understand the risks involved, and seek independent advice if
                            necessary.</p>
                        <br>

                        <p>Certain performance results shown on this site are based on the use of computerized system logic on
                            broker data, whilst other results are actual live results. Hypothetical or simulated performance
                            results have certain limitations. Unlike an actual performance record, simulated results do not
                            represent actual trading. Also, since the trades have not been executed, the results may have
                            under-or-over compensated for the impact, if any, of certain market factors, such as lack of
                            liquidity. Simulated trading programs in general are also subject to the fact that they are designed
                            with the benefit of hindsight. No representation is being made that any account will or is likely to
                            achieve profit or losses similar to those shown.</p>
                        <br>

                        <p>Iron Kondor Pty Ltd trading as Iron Kondor Corporation (ACN: 623 898 537) is an Australian based
                            algorithmic trading software development company and does not provide general nor personal financial
                            advice.</p>
                        <br>

                
                <div class="span">
                    <p class="copyright">© 2018 Iron Kondor Corporation | <a href="terms.html">Terms &amp;
                        Conditions</a> | <a
                            href="privacy.html">Privacy</a></p>
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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function() {
            $('#signup-form').validate({
                rules: {
                    lastName: "required",
                    address: {
                        required: true
                    },
                    amount: {
                        required: true,
                        digits: true
                    },
                    password: "required",
                    confirmpassword: {
                        required: true,
                        equalTo: "#password"
                    }

                },
                messages: {
                    lastName: "Please enter your last name",
                    address: {
                        required: "Please enter your address"
                    },      
                    amount: {
                        required: "Please enter amount",
                        digits: "Please enter only digits"
                    },
                    password: "Please enter password",
                    confirmpassword:{
                        required: "Please enter confirm password",
                        equalTo: "Password and confirm password should me same",

                    }
                }
            });
        });
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    

<?php  
if( isset( $_POST['submit']))
{
    extract($_POST);

    $query = "UPDATE `login` SET password = '$password' WHERE email = '$email'";
    mysqli_query( $conn, $query);

    $query1 = "UPDATE `registration` SET lastName = '$lastName', address = '$address', amount = '$amount' WHERE email = '$email'";
    mysqli_query( $conn, $query1);
    
    session_destroy();
    ?>
    <script type="text/javascript">
        swal("Success!", "Registration successful.", "success").then((value) => {
            window.location.href = "signup.html";
        });
    </script>
    <?php
}
?>
</body>
</html>
