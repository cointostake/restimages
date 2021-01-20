<?php

$to = time();
$from = $to - 60 * 60 * 24 * 180;
$json = file_get_contents("https://api.coingecko.com/api/v3/coins/elrond/market_chart?vs_currency=usd&days=180");
$hPrices = json_decode($json);

$labels = [];
$data = [];
foreach ($hPrices->prices as $price) {
    $string_date = date('d M', $price[0]/1000);
    $labels[] = "'$string_date'";
    $data[] = $price[1];
}
$labels = implode(',', $labels);
$data = implode(',', $data);

$json = file_get_contents('https://api.coingecko.com/api/v3/simple/price?ids=elrond&vs_currencies=usd&amp;include_market_cap=true;include_24hr_vol=true;include_24hr_change=true'); 
$elrondPrice = json_decode($json);



function formatter($amount) {
  // $formatter = new NumberFormatter('en_US',  NumberFormatter::CURRENCY);
  return '$'.number_format($amount, 5);;
}




$netchainNodePrice = $netchainPrice->netchain->usd * 100000;
$netchainDailyIncome = (70000 / $netchainnodes->total) * $netchainPrice->netchain->usd;
$netchainROI = 36500 / ($netchainNodePrice / $netchainDailyIncome);
$dashDailyIncome = (925 / 4930) * $dashPrice->dash->usd;
$pivxDailyIncome = (3240 / 1421) * $pivxPrice->pivx->usd;
$pivxNodePrice = $pivxPrice->pivx->usd * 10000;
$dashNodePrice = $dashPrice->dash->usd * 1000;
$pivxROI = 36500 / ($pivxNodePrice / $pivxDailyIncome);
$dashROI = 36500 / ($dashNodePrice / $dashDailyIncome);
$netchainROImonth = $netchainROI / 12;
$netchainROIday = $netchainROI / 365;
$netchainROIback = $netchainNodePrice / $netchainDailyIncome;
$pivxROIyearly = 9 ;
$pivxROIdayily = 0.025;
$netchainROIyearly = 21.6 ;
$netchainROIdayily = 0.06;
$cosmosROIyearly = 8.65 ;
$cosmosROIdayily = 0.023;
$eosROIyearly = 4.38 ;
$eosROIdayily = 0.012;
$eosROImonthly = 0.365 ;
$eosvalueyear = 0.0438 ;
$eosvaluemonth = 0.00365 ;
$eosvalueweek = 0.00085 ;
$eosvalueday = 0.00012 ;

$cardanoROIyearly = 5.00 ;
$cardanoROImonthly = 0.416 ;
$cardanovalueyear = 0.05 ;
$cardanovaluemonth = 0.00416 ;
$cardanovalueweek = 0.00104 ;
$cardanovalueday = 0.000148 ;

$chainlinkROIyearly = 0.72 ;
$chainlinkROImonthly = 0.06 ;
$chainlinkvalueyear = 0.0072 ;
$chainlinkvaluemonth = 0.0006 ;
$chainlinkvalueweek = 0.00015 ;
$chainlinkvalueday = 0.0000214 ;

$elrondROIyearly = 25.01 ;
$elrondROImonthly = 2.08 ;
$elrondvalueyear = 0.2501 ;
$elrondvaluemonth = 0.0208 ;
$elrondvalueweek = 0.005 ;
$elrondvalueday = 0.00068 ;



 ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152710279-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153425879-1');
</script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/Logo.png" type="image/png">
        <title>Elrond | Staking Coins | Staking | Proof of Stake Coins | POS Calculator</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
         <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="image/Logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="voting.php">Voting</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>


                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->

        

        <!-- Start Sample Area -->
			
				    <section class="sample-text-area">
        				<div class="container">
        				<center>	<h1 class="text-heading title_color"><img src="/img/elrond.png" width="40" height="40" title="Elrond logo" alt="Elrond logo" /> Elrond - ERD </h1></center>

                          </div>
                        
					
                     <div class="whole-wrap">
				<div class="container">
					                  

					
						<div class="row">
							<div class="col-lg-12">
								
									Elrond (ERD) represents a new blockchain architexture.  Elrond consists of two main features: Adaptive State Sharding mechanism, and a Proof of Stake (PoS) algorithm,
Network which aims to provide network speeds of up to 10000 transactions per second (TPR).
                               
                              <p></p> 
                              <p></p>
							</div>
						</div>
					
                 </div>
                  </div> 
                        
                 <div class="whole-wrap">
				<div class="container">
					
						
						<div class="row">
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Price</h4>
									<p> Elrond (ERD) price for today <b> $<?=number_format($elrondPrice->elrond->usd, 2) ?> </b></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Marketcap</h4>
									<p>Market capitalization <b> $<?=number_format($elrondPrice->elrond->usd_market_cap ) ?></b></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Price movement</h4>
									<p>Price movement in the last 24 hours <b><td class="<?= $elrondPrice->elrond->usd_24h_change >= 0 ?'text-success':'text-danger' ?>"><?= number_format($elrondPrice->elrond->usd_24h_change, 2) ?> %</b></p>
								</div>
							</div>
                           </div>
               
               <div class="row">
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">POS ROI (Yearly)</h4>
									<p>POS return of investment yearly <b><?=number_format($elrondROIyearly, 2) ?> %</b></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">Volume</h4>
									<p>24-hour trading volume  <b>$<?=number_format($elrondPrice->elrond->usd_24h_vol, 2) ?>.</b></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<h4 class="mb-20">POS ROI (Monthly)</h4>
									<p>POS return of investment montly <b><?=number_format($elrondROImonthly, 2) ?> %</b></p>
								</div>
							</div>
                           </div>            
                          
                         
                                       
            </div>
           
            </div>
            
             
                    </section>
                
                
                

             <!-- End Sample Area -->


        <!--================Breadcrumb Area =================-->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script> -->

  <script language="JavaScript"><!--
  // function displayLineChart() {
  //   var data = {
  //       labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
  //       datasets: [
  //           {
  //               label: "Prime and Fibonacci",
  //               fillColor: "rgba(220,220,220,0.2)",
  //               strokeColor: "rgba(220,220,220,1)",
  //               pointColor: "rgba(220,220,220,1)",
  //               pointStrokeColor: "#fff",
  //               pointHighlightFill: "#fff",
  //               pointHighlightStroke: "rgba(220,220,220,1)",
  //               data: [2, 3, 5, 7, 11, 13, 17, 19, 23, 29]
  //           },
  //           {
  //               label: "My Second dataset",
  //               fillColor: "rgba(151,187,205,0.2)",
  //               strokeColor: "rgba(151,187,205,1)",
  //               pointColor: "rgba(151,187,205,1)",
  //               pointStrokeColor: "#fff",
  //               pointHighlightFill: "#fff",
  //               pointHighlightStroke: "rgba(151,187,205,1)",
  //               data: [0, 1, 1, 2, 3, 5, 8, 13, 21, 34]
  //           }
  //       ]
  //   };
  //   var ctx = document.getElementById("lineChart").getContext("2d");
  //   var options = { };
  //   var lineChart = new Chart(ctx).Line(data, options);
  // }
  --></script>

  <!-- Start Sample2 Area -->

<section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Elrond price graph (6 month)</h2>
      <hr class="divider my-4">
      <div class="row">

          <div class="col-sm-12">
              <style>
              #NTXChart {
                  width: 100%;
                  height: 400px;
              }
              </style>
              <canvas id="NTXChart"></canvas>
          </div>


        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script>
      var element = document.getElementById('NTXChart').getContext('2d');
      var chart = new Chart(element, {
          type: 'line',
          data: {
              labels: [<?php echo $labels ?>],
              datasets: [{
                  label: 'Price in USD',
                  data: [<?php echo $data ?>],

              }]
          },
          options: {
              scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
          }
      });
  </script>
 <?php
// echo "<pre>"; var_dump($labels); echo "</pre>";
// echo "<pre>"; var_dump($data); echo "</pre>";

  ?>

  <!-- <body onload="displayLineChart();">

        <div class="container">

         <center> <canvas id="lineChart" height="300" width="530"></canvas>  </center>


  </body>


        </div>
      </div>
    </div>
  </section> -->
  <!-- End Sample Area -->

  <!-- Start Sample Area -->
   
 <!-- Start calculator Area -->
   <div class="whole-wrap">
				<div class="container">
				<div class="section-top-border">                
                 <center> <h1>Elrond Staking calculator</h1> </center>
                <center>  <form action="elrond.php" method="GET"> 
     Enter your ERD amount: <input type="number" name="num1">
    
     <input type="submit">
</form></center>

<center><?php
     $num1 = $_GET["num1"];
     $elrondvalueyearusd =  ($num1 * $elrondvalueyear) * $elrondPrice->elrond->usd ;
     $elrondvaluemonthusd =  ($num1 * $elrondvaluemonth) * $elrondPrice->elrond->usd ;
     $elrondvalueweekusd =  ($num1 * $elrondvalueweek) * $elrondPrice->elrond->usd ;
     $elrondvaluedayusd =  ($num1 * $elrondvalueday) * $elrondPrice->elrond->usd ;
     $elrondatstake =  $num1  * $elrondPrice->elrond->usd ;
     
?> </center>
   <center> <p>  ERD to stake :&nbsp;&nbsp;   <?=number_format($num1 , 2) ?>&nbsp;ERD&nbsp; ($<?=number_format($elrondatstake, 2) ?>)  </p> </center>
   <center> <p>  Yearly Earning :&nbsp;&nbsp;   <?=number_format($num1 * $elrondvalueyear, 2) ?>&nbsp;ERD&nbsp; ($<?=number_format($elrondvalueyearusd, 2) ?>)  </p> </center>
   <center> <p>  Montly Earning :&nbsp;&nbsp;   <?=number_format($num1 * $elrondvaluemonth, 2) ?>&nbsp;ERD&nbsp; ($<?=number_format($elrondvaluemonthusd, 2) ?>) </p> </center>
<center> <p>  Weekly Earning :&nbsp;&nbsp;   <?=number_format($num1 * $elrondvalueweek, 2) ?>&nbsp;ERD&nbsp; ($<?=number_format($elrondvalueweekusd, 2) ?>) </p> </center>
<center> <p>  Daily Earning :&nbsp;&nbsp;   <?=number_format($num1 * $elrondvalueday, 4) ?>&nbsp;ERD&nbsp; ($<?=number_format($elrondvaluedayusd, 4) ?>) </p> </center>                 
                 
          </div>
							</div>
                           </div>       
                  <!-- End calculator Area -->

 <div class="whole-wrap">
				<div class="container">
				<div class="section-top-border">

 <center>	 <h4 class="mb-20">Elrond Mining</h4> </center>
                               
                            <p> Elrond uses latest POS protocol called “Secure Proof of Stake”. In basics it is  combining eligibility through stake and rating, random validator selection and an optimal dimension for the consensus group.   </p>
</div>
							</div>
                           </div>



                    <!-- End Sample Area -->

                    
						
  <!-- Start Sample3 Area -->
                    <div class="whole-wrap">
				<div class="container">
          <section class="sample-text-area">
												<div class="row">
							<div class="col-md-4">
								<div class="single-defination">
									<center><h4 class="mb-20">Elrond Main  </h4>  </center>

                    <p class="sample-text">
						<center><a href="https://elrond.com/" rel="nofollow">Website</a> </center>
					</p>
                    <p class="sample-text">
						<center><a href="https://explorer.binance.org/asset/ERD-D06" rel="nofollow">Block explorer</a>   </center>
					</p>
                      <p class="sample-text">
						<center><a href="https://bitcointalk.org/index.php?topic=5173310" rel="nofollow">Forum</a>  </center>
					</p>

                      <p class="sample-text">
						<center><a href="https://github.com/ElrondNetwork" rel="nofollow">Source code</a>  </center>
					</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<center><h4 class="mb-20">Elrond Social  </h4> </center>
									 <p class="sample-text">
						<center><a href="https://t.me/ElrondNetwork" rel="nofollow">Telegram</a></center>
					</p>
                       <p class="sample-text">
						<center><a href="https://twitter.com/ElrondNetwork" rel="nofollow">Twitter</a></center>
					</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="single-defination">
									<center><h4 class="mb-20">Elrond Exchanges </h4> </center>
									 <p class="sample-text">
					<center>	<a href="https://www.binance.com/en/trade/ERD_USDT" rel="nofollow">Binance</a> </center>
                    <center>	<a href="https://bilaxy.com/trade/ERD_USDT" rel="nofollow">Bilaxy</a> </center>
                    <center>	<a href="https://bitmax.io/#/trade/usdt/erd" rel="nofollow">BitMax</a> </center>
                    <center>	<a href="https://wazirx.com/exchange/ERD-USDT" rel="nofollow">WazirX</a> </center>
                    <center>	<a href="https://coindcx.com/trade/ERDUSDT" rel="nofollow">CoinDCX</a> </center>
                    
                    
                    
					</p>

								</div>
							</div>
						</div>
					</div>
                   <!-- End Sample Area -->

        <!--================ start footer Area  =================-->
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Agency</h6>
                            <p>Coin to stake is an elaborate guide on the major crypto coins in circulation today.  It considers various factors such as their respective value to the pillar crypto and FIAT currencies, volatility, accessibility, liquidity and more.  </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="https://cointostake.com/index.php">Home</a></li>
                                        <li><a href="https://cointostake.com/voting.php">Coin Voting</a></li>
                                        <li><a href="https://forms.gle/mSWb57fBGMUtmEJy8" rel="nofollow">Coin Listing</a></li>
                                        <li><a href="https://cointostake.com/contact.html">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="https://cointostake.com/blog.html">Blog</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>Sign up today for free and be the first to get notified on new updates. </p>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                                    </div>
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list_style instafeed d-flex flex-wrap">
                                <li><img src="image/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Website was created by <a href="https://net-chain.net" rel="nofollow" target="_blank">NTX developers</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
