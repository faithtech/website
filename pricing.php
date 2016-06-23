<!DOCTYPE html>
<html lang="zh-tw">
<head>
	<meta charset="utf-8">
	<title>Checkin+</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="icon" href="favicon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="public/css/rwd-table.min.css">
	<link rel="stylesheet" href="public/css/main.css">	
</head>
<body class="pricing">            
    <header class="header-main white-bg">
	    <div class="container">
	    	<?php include_once('in_header.php'); ?>
	    </div>
	</header>

    <main>
    	<div class="banner space-2">
    		<div class="container container-700">
	    		<h2 class="space-1">Checkin+ <br class="visible-xs"><span class="trn">How to work with you?</span></h2>
	    		<p class="space-1 trn">Hello, we offer a "rental model" and "value-added services," If you need more detailed instructions, please contact us</p>
	    		<ul class="space-2">
	    			<li class="space-1"><span class="trn">Email:</span>service＠faithtech.com.tw</li>
	    			<li><span class="trn">Tel:</span>+886266396528 # 6404</li>
	    		</ul>
	    		<div class="hidden-xs"><a href="http://www.faithtech.com.tw/pricing-table.pdf" class="btn btn-bordered btn-white"><i class="fa fa-cloud-download" aria-hidden="true"></i> <span class="trn">Download Price List</span></a></div>
	    	</div>
    	</div>
    	<div class="container">
    		<p class="space-2 text-center font-sm trn">Or you can fill out "to do active service appointment" and that you will be contacted by the person</p>
    		<div class="text-center space-4"><a class="btn btn-primary btn-xl trn" data-toggle="modal" data-target="#modal-booking">Send Order</a></div>
    		<h2 class="title-left-border space-2 trn">Leasing model</h2>
    		<div class="table-responsive js-table" data-pattern="priority-columns" data-focus-btn-icon="" data-sticky-table-header="false">
    			<table class="table table-bordered font-sm table-middle phone-text-xs table-pricing">
    				<thead>
	    				<tr class="active">
	    					<th class="phone-half"><span class="trn">Number of people</span></th>
	    					<th data-priority="1">100<span class="trn">p below</span></th>
	    					<th data-priority="2">101 - 300<span class="trn">p</span></th>
	    					<th data-priority="2">301 - 500<span class="trn">p</span></th>
	    					<th data-priority="2">501 - 700<span class="trn">p</span></th>
	    					<th data-priority="4">701 - 1000<span class="trn">p</span></th>
	    					<th data-priority="4">1000<span class="trn">p up</span></th>
	    				</tr>
	    			</thead>
	    			<tbody>
	    				<tr>
	    					<td class="text-left active">
	    						<h2 class="title-table space-1 space-top-2">A <span class="trn">plan</span></h2>
	    						<ul class="list-disc space-2">
	    							<li>Checkin+ Box</li>
	    							<li>System Portal</li>
	    						</ul>
	    					</td>
	    					<td>3000<span class="trn">NTD</span></td>
	    					<td>5000<span class="trn">NTD</span></td>
	    					<td>6500<span class="trn">NTD</span></td>
	    					<td>8500<span class="trn">NTD</span></td>
	    					<td>10500<span class="trn">NTD</span></td>
	    					<td><span class="trn">Project Valuation</span></td>
	    				</tr>
	    				<tr>
	    					<td class="text-left active">
	    						<h2 class="title-table space-1 space-top-2">B <span class="trn">plan</span></h2>
	    						<ul class="list-disc space-2">
	    							<li>Checkin+ Box</li>
	    							<li>System Portal</li>
	    							<li><span class="trn">Tablet + holder (a)</span><p class="tip trn">An increase of 500NTD</p></li>
	    							<li class="trn">Printing paper, $ 5 each</li>
	    							<li><span class="trn">Message sent, each 2 yuan per person</span><br><span class="trn">(SMS, email)</span></li>
	    						</ul>
	    					</td>
	    					<td>4000<span class="trn">NTD</span></td>
	    					<td>6000<span class="trn">NTD</span></td>
	    					<td>8500<span class="trn">NTD</span></td>
	    					<td>10500<span class="trn">NTD</span></td>
	    					<td>12500<span class="trn">NTD</span></td>
	    					<td><span class="trn">Project Valuation</span></td>
	    				</tr>
	    			</tbody>
    			</table>
    		</div>
    		<h2 class="title-left-border space-2 space-top-4 trn">Value-added services</h2>
    		<div class="table-responsive js-table" data-pattern="priority-columns" data-focus-btn-icon="" data-sticky-table-header="false">
    			<table class="table table-bordered font-sm table-middle phone-text-xs table-pricing">
    				<thead>
	    				<tr class="active">
	    					<th class="phone-half"><span class="trn">Number of people</span></th>
	    					<th data-priority="1">100<span class="trn">p below</span></th>
	    					<th data-priority="2">101 - 300<span class="trn">p</span></th>
	    					<th data-priority="2">301 - 500<span class="trn">p</span></th>
	    					<th data-priority="2">501 - 700<span class="trn">p</span></th>
	    					<th data-priority="4">701 - 1000<span class="trn">p</span></th>
	    					<th data-priority="4">1000<span class="trn">p up</span></th>
	    				</tr>
	    			</thead>
	    			<tbody>
	    				<tr>
	    					<td class="text-left active">
	    						<h2 class="title-table space-1 space-top-2 trn">Cloud Live Video Conference</h2>
	    						<ul class="list-disc space-1">
	    							<li class="trn">Text chat</li>
	    							<li class="trn">Desktop Sharing</li>
	    							<li class="trn">Voice, video</li>	    							
	    						</ul>
	    						<div class="tip space-2">* <span class="trn">Combined with existing video equipment excluding</span></div>
	    					</td>
	    					<td>3000<span class="trn">NTD</span></td>
	    					<td>5000<span class="trn">NTD</span></td>
	    					<td>7000<span class="trn">NTD</span></td>
	    					<td>9000<span class="trn">NTD</span></td>
	    					<td>1100<span class="trn">NTD</span></td>
	    					<td><span class="trn">Project Valuation</span></td>
	    				</tr>
	    				<tr>
	    					<td class="text-left active">
	    						<h2 class="title-table space-1 space-top-2">Online questionnaire</h2>
	    						<ul class="list-disc space-2">
	    							<li class="trn">Question function</li>
	    							<li class="trn">Voting</li>
	    							<li class="trn">Two questionnaires</li>
	    							<li class="trn">Every five issues</li>
	    						</ul>
	    					</td>
	    					<td>300<span class="trn">NTD</span></td>
	    					<td>400<span class="trn">NTD</span></td>
	    					<td>500<span class="trn">NTD</span></td>
	    					<td>600<span class="trn">NTD</span></td>
	    					<td>700<span class="trn">NTD</span></td>
	    					<td><span class="trn">Project Valuation</span></td>
	    				</tr>
	    				<tr>
	    					<td class="text-left active">
	    						<h2 class="title-table space-2 space-top-2 trn">Cloud data storage Meeting</h2>
	    					</td>
	    					<td>200<span class="trn">NTD</span></td>
	    					<td>400<span class="trn">NTD</span></td>
	    					<td>600<span class="trn">NTD</span></td>
	    					<td>800<span class="trn">NTD</span></td>
	    					<td>1000<span class="trn">NTD</span></td>
	    					<td><span class="trn">Project Valuation</span></td>
	    				</tr>
	    			</tbody>
    			</table>
    		</div>
    		<div class="container container-700 space-top-4">
    			<p class="space-1 font-sm trn">The following value-added projects, the project will be based on the needs of different make adjustments, please contact us!</p>
    			<div class="box-light box-light-lg space-1">
    				<ul class="space-1 font-sm phone-text-xs">
    					<li class="space-1"><span class="trn">Email:</span><a href="mailto:service＠faithtech.com.tw" class="text-primary text-underline">service＠faithtech.com.tw</a></li>
    					<li><span class="trn">Tel:</span>+886266396528 # 6404</li>
    				</ul>
    				<div class="hidden-xs"><a href="http://www.faithtech.com.tw/pricing-table.pdf" class="btn btn-bordered btn-default"><i class="fa fa-cloud-download" aria-hidden="true"></i> <span class="trn">Download Price List</span></a></div>
    			</div>
    			<p class="space-2 font-sm trn">Or you can fill out "to do active service appointment" and that you will be contacted by the person</p>
    			<div class="text-center space-4"><a class="btn btn-primary btn-xl trn" data-toggle="modal" data-target="#modal-booking">Send Order</a></div>
    		</div>
    		<h2 class="title-left-border space-3 trn">VAT project</h2>
    		<div class="row row-md">
    			<div class="col-md-4 space-2">
    				<div class="row">
    					<div class="col-md-12 col-sm-4 text-center space-2">
    						<img src="public/img/pic-01.png" alt="Cloud Drive Storage 2350 NTD">
    					</div>
    					<div class="col-md-12 col-sm-8">
    						<h3 class="text-left-sm trn">Cloud Drive Storage 2350 NTD</h3>
    						<p class="text-left-sm trn">Increase NTD 299 optional, can be loaded on their own flash drive</p>
    						<p class="text-left-sm">[ <span class="trn">Simple</span> ]｜ <span class="text-primary">App Free</span></p>
    						<div class="box-light space-1">
    							<ul class="list-inline">
    								<li style="width: 50%;">* <span class="trn">Personal cloud adapter</span></li>
    								<li>* <span class="trn">Power Supplier</span></li>
    								<li style="width: 50%;">* <span class="trn">Without battery</span></li>
    								<li>* <span class="trn">Ethernet cable</span></li>
    								<li style="width: 50%;">* <span class="trn">Ethernet Interface</li>
    								<li>* <span class="trn">32GB flash drive</span></li>
    								<li>* <span class="trn">QR Code Scan connection</span></li>
    								<li>* <span class="trn">Support standard USB external storage device</span></li>
    							</ul>    							
    						</div>
    						<p class="tip" style="padding-left: 2rem">CE, RoHS Compliant<br>500 pcs(MOQ)</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 space-2">
    				<div class="row">
    					<div class="col-md-12 col-sm-4 text-center space-2">
    						<img src="public/img/pic-02.png" alt="Marketing again">
    					</div>
    					<div class="col-md-12 col-sm-8">
    						<h3 class="text-left-sm space-2 trn">Marketing again</h3>
    						<p class="trn">Through the "data analysis", "marketing analysis", "behavioral analysis" allows you to quickly and accurately and participants to interact, we'll turn on demand based pricing, please contact us</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 space-2">
    				<div class="row">
    					<div class="col-md-12 col-sm-4 text-center space-2">
    						<img src="public/img/pic-03.png" alt="Other peripheral services">
    					</div>
    					<div class="col-md-12 col-sm-8">
    						<h3 class="text-left-sm space-2 trn">Other peripheral services</h3>
    						<p class="trn">A key statistics, quick change business cards, attendance and other integrated cloud services support, once you are contracted out! Please contact us and we'll valuation based on the project needs</p>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="text-center space-3"><a class="btn btn-primary btn-xl trn" data-toggle="modal" data-target="#modal-booking">Send Order</a></div>
    	</div>
    </main>

    <footer class="footer-main" id="nav-4">
		<div class="container">
			<h2 class="text-center space-3 space-top-2 trn">Faith Tech Corp.</h2>
			<nav class="nav-info">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i><label class="hidden-xs trn">Tel:</label>+886266396528 # 6404</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><label class="hidden-xs trn">Email:</label>service@faithtech.com.tw</li>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i><label class="hidden-xs trn">Add:</label><span class="trn">10658 6F., No.153, Sec. 3, Xinyi Rd., Da’an Dist., Taipei City 106, Taiwan (R.O.C.)</span></li>
				</ul>
			</nav>
			<address class="text-center">Copyright © 2016 Faith Tech Corp. All rights reserved.</address>
		</div>
	</footer>

	<?php include_once('in_order_form.php'); ?>

    <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'XXXXXXXX', 'auto');
	ga('send', 'pageview');
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/ab21b0f3a3.js"></script>
	<script src="public/js/all.js"></script>
</body>
</html>