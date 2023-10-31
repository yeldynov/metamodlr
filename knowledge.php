<?php

   session_start();

   if (!isset($_SESSION['user_id'])) header("Location:logout.php");

   //if(!isset($_SESSION['username'])) {
   //    die("Please login");
   //}

   //if(res=='ok'){
   //      window.location.replace("http://metamodelr.com/knowledge.html");
   //}else{
   //      window.location.replace("http://metamodelr.com/login.html");
   //}
   
   //if(!isset($_SESSION['username'])){
   //   header('location: login.php');
   //}

   //session_destroy();
   //quit();
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

    <title>Knowledge Repository</title>

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
                <li class="active"><a href="about.php">ABOUT</a></li>
                        <li><a href="consulting.php">CONSULTING</a></li>
                <li><a href="solutions.php">SOLUTIONS</a></li>
                <li><a href="knowledge.php">KNOWLEDGE</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- TOP BAR END-->

<!--START: BANNER-->
<section class="banner-section-knowledge"></section>
<!--END: BANNER-->




       <!-- Knoeledge Repository START-->
       <section class="faq-question-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hedding">
                            <h1>
                                Knoeledge Repository
                            </h1>
                        </div>
                        <div class="why-choose-us">
                            <div class="panel-group why-choose-acc" id="accordion" role="tablist" aria-multiselectable="true">

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What's in it for traders?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <!--
                                            <p>Secure trading with foreign brokers.</p>
                                            <p>The fact that all trades are recorded in the blockchain.</p>
                                            <p>Client funds are put on smart contracts.</p>
                                            <p>A trader transfers funds to a smart contract. The broker provides an equivalent in the account currency. Smart contract is created the way that access to client's funds is given to a trader or to a broker. The funds become "unfrozen" at the moment when the client submits a withdrawal request.</p>
                                            <p>Transparency of trading transactions.</p>
                                            <p>All trades are recorded in blockchain. It obviates the possibility of backdated transactions.</p>
                                            <p>Fast deposit/withdrawal of funds.</p>
                                            <p>Deposit/withdrawal of funds is standardized and is carried out through the platform and Iron Kondor tokens.</p>
                                            <p>Single verification.</p>
                                            -->


<script src="http://gist-it.appspot.com/github/robertkrimen/gist-it-example/blob/master/example.js"></script>

                                            </br>

<img src="images/content/Azure_Data_Factory.jpg" width="600px" alt="Azure_Data_Factory" align="middle">

</br>

  <div class="row flow">
    <div class="small-12 columns">
    </div>
  </div>
  <div class="row flow">
    <div class="small-12 columns">
      <iframe class="no-js-iframe" src="https://trinket.io/embed/python/3d8d7ce66b?start=result" width="100%" height="450" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
    </div>
  </div>


</br>
</br>

<img src="images/content/Azure_Data_Factory.jpg" width="600px" alt="Azure_Data_Factory" class="center">

</br>

                                            <div class="highlight"><pre style="color:#f8f8f2;background-color:#272822;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-python" data-lang="python">number1 <span style="color:#f92672">=</span> float(input(<span style="color:#e6db74">&#34;Enter the first number: &#34;</span>))
number2 <span style="color:#f92672">=</span> float(input(<span style="color:#e6db74">&#34;Enter the second number: &#34;</span>))
solution <span style="color:#f92672">=</span> number1 <span style="color:#f92672">+</span> number2
<span style="color:#66d9ef">print</span>(<span style="color:#e6db74">&#34;The sum of your numbers is {}&#34;</span><span style="color:#f92672">.</span>format(solution))
</code></pre></div>


</br>

<!--
<div class="answercell post-layout--right"> 
    <div class="s-prose js-post-body" itemprop="text">
    -->
<p>See <code>?cut</code> and specify <code>breaks</code> (and maybe <code>labels</code>).</p>
<pre class="lang-r s-code-block hljs"><code>x$bins &lt;- cut(x$rank, breaks=<span class="hljs-built_in">c</span>(<span class="hljs-number">0</span>,<span class="hljs-number">4</span>,<span class="hljs-number">10</span>,<span class="hljs-number">15</span>), labels=<span class="hljs-built_in">c</span>(<span class="hljs-string">"1-4"</span>,<span class="hljs-string">"5-10"</span>,<span class="hljs-string">"10-15"</span>))
x
<span class="hljs-comment">#   rank  name   info  bins</span>
<span class="hljs-comment"># 1    1 steve    red   1-4</span>
<span class="hljs-comment"># 2    3   joe   blue   1-4</span>
</code>
</pre>





                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                What's in it for brokers?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p>Participation in the Iron Kondor project demonstrates the company's transparency and elevates the level of customer trust.</p>
                                            <p>New clients are easily attracted thanks to the fact that all trades are under control and the funds are secured.</p>
                                            <p>Transparency &amp; Accountability of all parties.</p>
                                            <p>Clients of participating companies are protected from unlawful actions of brokers by blockchain technology.</p>
                                            <p>Iron Kondor budget includes marketing and PR spend for promotion of participating companies.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Which countries or nationalities are eligible to purchase Iron Kondor tokens?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p>Citizens of any country except USA and Singapore may take part in the project. According to our policies, terms and conditions, citizens of the above-mentioned countries cannot take part in the crowdfunding campaign.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                I transferred funds to your account, but while the transaction was being processed, the ICO ended. What will happen to my funds?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <p>If the funds are transferred to the project's wallet after the ICO is finished, it is returned to the sender's wallet according to the current exchange rate with no conversion. For example, after the ICO is completed, if the project wallet is funded with 1 BTC, the same amount will be returned to the sender's wallet, disregarding the BTC quote at the moment the BTC was sent. To prevent such situations, we recommend setting the appropriate transaction commission for timely processing and considering the ICO timeframe. The same process will be activated for any other cryptocurrency.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                What is the minimum target? What happens if the required amount is not raised?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <p>Minimum target is $2 million. If the amount is not raised, we will return all the raised funds back to the wallets of the crowdsale participants.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                When will the bounty payouts take place?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                        <div class="panel-body">
                                            <p>Bounty payouts will be paid to the participants within one week after the ICO.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSeven">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                When will your tokens be listed on exchanges?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                        <div class="panel-body">
                                            <p>We plan to list Iron Kondor tokens on several major exchanges within one month after the ICO.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingEight">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                How will you record all transactions on the Ethereum blockchain? It is very expensive.
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                        <div class="panel-body">
                                            <p>We will not record each trading operation on a separate smart Ethereum contract, thus, records of transactions will occur in a classical database, but with the help of a digital signature. This will prevent fraud in relation to trade. The record will be maintained both for liquidity providers, traders &amp; investors. In this regard, each client will have their own trading history.</p>
                                            <p>At the same time, a hash of the database will be sent to the Ethereum contract, which will be recorded every hour. Should a controversial incident occur, it will be adequate enough for us to verify the current hash and the one that is written in the block.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingNine">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                How are you going to receive data from trading platforms? Who will give them to you?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                        <div class="panel-body">
                                            <p>Those who wish to protect themselves will provide us with access to their trading operations information. In this case, the entire history of trades will be hidden from the public, unless the client chooses to engage in a public dispute with the broker.At the same time, it will be enough for us to receive information from the client database.Additionally (with respect to the platform), we have received feedback from liquidity providers who are ready to provide access to their part of the database, increasing their level of transparency.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwelve">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                Which blockchain will you use?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                                        <div class="panel-body">
                                            <p>At the current stage, we will use Ethereum smart contracts. Additionally, we are platform or instrument agnostic (we are not dependent on a particular platform or instrument in the blockchain). We will use the one that best meets our requirements for speed, reliability, and cost.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThirteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                Why do you need blockchain in your project?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                                        <div class="panel-body">
                                            <p>Blockchain in our project solves several important tasks at once: first, we create a depository with segregated accounts on it; secondly, we record information on the trading operations of clients; finally, we use it to facilitate the sale of tokens to the ICO. An important aspect of blocking technology is transparency. With the help of blockchain, customer confidence in trading is significantly increased.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFourteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                                You claim the platform protects traders against fraudulent brokers by storing funds on smart contracts. What are the guarantees that you will not take the funds and close shop?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                                        <div class="panel-body">
                                            <p>The smart contract used in the system will have an open code. This will include a special clause: only a trader or investor will be able to receive the funds, depending on the financial result of the trading operation, which will be recorded within the platform. It means that no third party will be able to access the funds, including us.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSixteen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                                Do you have a prototype?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
                                        <div class="panel-body">
                                            <p>Our platform unites a number of serious tech solutions in a single system. Some parts of the technology already exist and are being employed. As of now we have a cryptocurrency exchange prototype and quotes verification system prototype.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSeventeen">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                                Why do you not have a Hard Cap?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeventeen">
                                        <div class="panel-body">
                                            <p>At this stage, we can not forcast the rate of funding from investors for our IKD tokens and so we would like to keep it open ended until we reach our Medium Cap threshhold and then subsequent review. Such a final Hard Cap amount includes all the technological developments, legalization of the company in the needed jurisdictions (UK, EU, New Zealand, Australia, Malaysia) plus the required capital, marketing and sales. In each of the countries where we will have a license, we will need to meet the capital requirements and in some countries (e.g. UK) we will need to have a hedge fund for liquidity.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Knoeledge Repository END-->






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

</body>
</html>


<?php

?>