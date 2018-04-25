<html>
<head>
	<title><?php echo $title; ?></title>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script>
	if(navigator.userAgent.indexOf("Speed Insights") == -1) {
		var script = document.createElement("script");
		script.src = "https://www.googletagmanager.com/gtag/js?id=UA-110331342-4";
		script.setAttribute("async", "");
		document.head.appendChild(script);
	
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-110331342-1');
	}
	</script>

	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?php echo base_url("assets/css/common/default.css?v=1"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/" . $page_name . ".css?v=2"); ?>" />
	
	<meta name="description" content="Your one stop solution for organization, community, public service, travel & food." />
	<meta name="keywords" content="apartemen harian, apartemen bulanan, sewa apartemen surabaya, apartemen mewah, apartemen surabaya, sewa villa" />
</head>
<body>
<div class="header">
</div>
<div class="container">