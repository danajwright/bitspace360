<html>
<head>
	<meta charset="utf-8">
	<!--viewport goodness http://enva.to/A79s3G-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coinbase360</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/fluid_skeleton.css">
	<link rel="stylesheet" href="css/bs-css/bootstrap.css">

	<!-- Hide Safari on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<!-- 16x16 favicon -->
	<link rel="shortcut icon" href="/img/favicon.ico">

	<!-- Apple homescreen icons -->
	<link rel="apple-touch-icon" sizes="57x57" title="Bitspace360" href="/img/homescreen-icon-57.png">
	<link rel="apple-touch-icon" sizes="72x72" title="Bitspace360" href="/img/homescreen-icon-72.png">
	<link rel="apple-touch-icon" sizes="114x114" title="Bitspace360" href="/img/homescreen-icon-114.png">
	<link rel="apple-touch-icon" sizes="144x144" title="Bitspace360" href="/img/homescreen-icon-144.png">

</head>

<div class="navbar navbar-inverse navbar-fixed-top navbar-custom">
	<div class="container">
		<span class="navbar-brand">Bitspace360</span>
		<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
	</button>
		<div class="collapse navbar-collapse navHeaderCollapse navbar-collapse-custom">
			<ul class="nav navbar-nav navbar-right nav-right-custom">
				<li><a href="#">MeetUp+</a></li>
				<li><a href="#">Twitter+</a></li>
				<li><a href="#">BTC/LTC Accepted Here</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-left nav-left-custom">
				<li>USD/BTC: $<span id="price"></span></li>
			</ul>
		</div>
	</div>
</div>

<body>

	<header class="band" data-0="background-position:0px 0px;" data-500="background-position:0px -250px;">

		<div class="container">

			<div class="columns sixteen" data-0="opacity: 1" data-180="opacity: 0">

				<h1>Bitspace360</h1>

<!-- Button to trigger modal -->
<!-- <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
 -->
				<a data-toggle="modal" href="#myModal" class="button" data-toggle="modal">Work Here</a>

			  <!-- Modal -->
			  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

			  <div id="php-email">
				  <?php
		    		$name = $_POST['name'];
		    		$email = $_POST['email'];
		    		$message = $_POST['message'];
		    		$from = 'bitspace360';
		    		$to = 'danajwright@gmail.com';
		    		$to = 'bitspace360@gmail.com';
		    		$subject = 'work-inquiry';
			    	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
					?>
				</div>

			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title">Tell Us About Your Project</h4>
			        </div>
			        <div class="modal-body">
			          <form method="post" action="#php-email">
  								<input id="one" name="name" placeholder="name">
  								<input id="two" name="email" placeholder="email">
  								<textarea id="three" name="message" placeholder="type message here..."></textarea>
  								<input id="submit" type="submit" name="submit" value="Submit">
								</form>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <button type="button" class="btn btn-primary">Save changes</button>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->

			</div><!--/ columns-->

		</div><!--/ container-->

	</header><!--/ band-->

	<div class="band main">

		<div class="container">

			<div class="columns sixteen crypto-header">

				<h2>CRYPTO-HACKERS UNITE IN THE HEART OF SF</h2>

			</div><!--/ column-->

			<div class="columns four offset-by-one main-icons">
				<img src="img/meetup-icon.png">
				<h3>MeetUp</h3>
			</div>

			<div class="columns four offset-by-one main-icons">
				<img src="img/mining-icon.png">
				<h3>Mining</h3>
			</div>

			<div class="columns four offset-by-one main-icons">
				<img src="img/hack-icon.png">
				<h3>Hacking</h3>
			</div>

		</div><!--/ container-->

		<hr class="hr-body meetup-top">

		<div class="container meetup">

			<div class="columns ten">

				<div class="fluid-wrapper">

					<iframe src="https://mapsengine.google.com/map/embed?mid=z12WA6o0XH8c.k2wtwpv5M5p0"></iframe>

				</div>

			</div>

			<div class="columns six meetup-map-txt">

				<p>
					<strong>Bitspace360</strong><br>
					360 5th Street<br>
					San Francisco, CA 94107
				</p>
				<p>
					<a href="#">We host a MeetUp</a> on Thursdays at 7pm for buying, selling, and trading crypto-currencies. We also use this opportunity to discuss recent developments in the community and find out what people are working on. Please visit the MeetUp group to learn more and RSVP.
				</p>
			</div>

		</div><!--/ container-->

<!-- MINING container -->

		<div class="band main mining">

			<div class="container">

				<div class="columns six mining-txt">

					<h2>Mine With Us</h2>
					<p>We offer resources to get you up and running at max capacity:</p>
						<ul>
							<li><span class="bullet">&raquo;</span>&nbsp;Hardware support</li>
							<li><span class="bullet">&raquo;</span>&nbsp;Mining software and configuration</li>
							<li><span class="bullet">&raquo;</span>&nbsp;Finding the right mining pool</li>
							<li><span class="bullet">&raquo;</span>&nbsp;Hosting with no electricity cost</li>
						</ul>
					<a href="#" class="mining-button">Lets Roll</a>

				</div>

				<div class="columns nine offset-by-one mining-img">

					<img src="img/litecoin-miner.png" width="100%"></img>

				</div>

			</div><!--/ container-->

		</div> <!-- band main mining	 -->

		<div class="container">

			<div class="columns sixteen hacking">

				<h2>A Community of Hackers</h2>

				<p>
					We host a lively group of hackers, builders and innovators for live <a href="http://www.meetup.com/SF-Bitcoin-Devs/">hackathons.</a> These events typically feature collaborative coding and screen sharing, as well as experimenting with bitcoin. We work in teams of 4-6, grouped by project interest and language domain. Past projects have included a Bitcoin Python Implementation, BIPS 11/13/16/17 Multisig and P2SH, Building a Bitcoin environment in Linux, Bitcoin implementation in Scala, Bitcoin payments in Gaming and an HD Wallet UI in C++.
				</p>

			</div>

		</div><!--/ container-->

	</div><!--/ band-main-->

	<footer class="band main">

		<div class="container">

			<div class="columns ten address">

				<h3>About</h3>
				<p>But I can't give you this case, it don't belong to me. I've already been through too much shit this morning over this case to hand it over to your dumb ass.</p>

				<h3>BTC/LTC Accepted Here</h3>
				<script src="http://agilob.net/widget/coin.js"></script>
				<script>
				  CoinWidgetCom.go({
				    wallet_address: "DG58CMWs3o8Tz95WbrQouAev4Xrj5tyb8n",
			    	currency: "dogecoin",
			    	counter: "donations",
			    	alignment: "tl",
			    	qrcode: true,
			    	auto_show: false,
			    	lbl_button: "DOGE",
			    	lbl_address: "My Dogecoin Address:",
			    	lbl_amount: "DOGE",
				  });
				</script>
				<script>
					CoinWidgetCom.go({
						wallet_address: "1Hk6JzwyyppqnRMixstVggfJcRurEEWe7a",
						currency: "bitcoin",
						counter: "amount",
						alignment: "bl",
						qrcode: true,
						auto_show: false,
						lbl_button: "BTC",
						lbl_address: "My Bitcoin Address:",
						lbl_count: "donations",
						lbl_amount: "BTC",
					});
				</script>
				<script>
					CoinWidgetCom.go({
        		wallet_address: "LMqsSp7t3J44y35VkPwhMvF9SBHQC7moqv",
        		currency: "litecoin",
        		counter: "amount",
        		alignment: "bl",
        		qrcode: true,
        		auto_show: false,
        		lbl_button: "LTC",
        		lbl_address: "My Litecoin Address:",
        		lbl_count: "donations",
        		lbl_amount: "LTC",
					});
				</script>

			</div><!--/ column-->

			<div class="columns five offset-by-one">

				<div id="twitter-ticker">
					<h3 id="twitter-h3">@bitspace360</h3>
					<a class="twitter-timeline" href="https://twitter.com/gngrdev" data-widget-id="427857405687234560" data-theme="dark" data-link-color="#2682a9"  data-related="twitterapi,twitter" data-chrome="nofooter noborders noheader noscrollbar transparent" data-aria-polite="assertive" avatars="false" data-tweet-limit="1" width="100%" lang="EN"></a>

					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			  </div>

			  <div id="twitter-button">
			  	<a href="https://twitter.com/BitSpace360" class="twitter-follow-button" data-show-count="false">Follow @BitSpace360</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
					</script>
				</div>

			</div><!--/ column-->

			<div class="columns sixteen">

			  <hr class="footer-hr">

				<p>&copy;Bitspace360 2014</p>

			</div><!--/ column-->

		</div><!--/ container-->

	</footer><!--/ main-->


	<!--js stuff down here after the rest of the page has loaded-->
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/bs-js/bootstrap.js"></script>
	<script src="js/skrollr.js"></script>
	<script type="text/javascript">
	skrollr.init({
		forceHeight: false
	});
	</script>

</body>

</html>