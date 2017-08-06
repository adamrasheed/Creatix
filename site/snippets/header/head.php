<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<?php snippet('header/meta'); ?>


	<link rel="canonical" href="<?= $page->url() ?>">
   
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/images/fav/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/images/fav/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="assets/images/fav/manifest.json">
    <link rel="mask-icon" href="assets/images/fav/safari-pinned-tab.svg" color="#e84545">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/aa889b8efb.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700|Montserrat:400,700" rel="stylesheet">

    <!-- Styles -->
	<?= css('assets/css/main.css') ?>

    <!-- Heap Analytics -->
    <script type="text/javascript">
	    window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(r?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","removeEventProperty","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
	      heap.load("863430558");
	</script>

</head>