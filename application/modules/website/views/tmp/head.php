<!DOCTYPE HTML>
<head>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/home"); ?>/css/layout.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/home"); ?>/css/style4.css" />
   <script language="javascript" type="text/javascript" src="<?php echo base_url("public/home"); ?>/js/jquery.js"></script>
   <script language="javascript" type="text/javascript" src="<?php echo base_url("public/home"); ?>/js/jquery.easing.js"></script>
   <script language="javascript" type="text/javascript" src="<?php echo base_url("public/home"); ?>/js/script.js"></script>
  <script language="javascript" type="text/javascript" src="<?php echo base_url("public/home"); ?>/js/backtop.js"></script>
   <script type="text/javascript">
    $(document).ready( function(){	
   		// buttons for next and previous item						 
   		var buttons = { previous:$('#jslidernews1 .button-previous') ,
   						next:$('#jslidernews1 .button-next') };
   		 $obj = $('#jslidernews1').lofJSidernews( { interval : 5000,
   											 	easing			: 'easeInOutQuad',
   												duration		: 1200,
   												auto		 	: true,
   												maxItemDisplay  : 3,
   												startItem:0,
   												navPosition     : 'horizontal', // horizontal
   												navigatorHeight : null,
   												navigatorWidth  : null,
   												mainWidth:720,
   												buttons:buttons} );		
   	});
      
   </script>
   <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
   <meta name="author" content="vuhaik3" />
   <meta name="robots" content="INDEX,FOLLOW" />
   <meta name="keywords" content="<?php echo $meta['keyword']; ?>" />
   <meta name="description" content="<?php echo $meta['description'];; ?>" />
   <link rel="stylesheet" href="<?php echo base_url("public/home"); ?>/css/style.css" />
   <title><?php echo $meta['title'];; ?></title>
</head>