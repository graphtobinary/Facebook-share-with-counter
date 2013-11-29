<!DOCTYPE html>
<html lang="en-us">

<?php
	require("social.php");
	fb_count();
	
?>

<head>

    <meta charset="utf-8">
    <title>Prashant pandey - Custom Facebook Share Button With Custom Counter</title>
    
    <style type="text/css">
    	/*** GENERAL ***/
   		* { margin:0; padding:0; }
		html, body { height: 100%; }
		body { background: #fff; overflow: hidden; text-align: center; }
		img { border: 0; outline: none; }
		
		/*** CONTAINER ***/
		.button1 { float: left; margin: 0 0 20px 0; width: 400px; }

		/***BUTTON***/
		.button1 a#button {
			background-image:url('image/1.png');
			float: left;
			margin: 0px;
			padding: 25px;
			width: 180px;
		}
			
			
		/*** FB COUNTER ***/
		.button1 .counter {	
			background: url("images/fb_counter.gif") no-repeat left center transparent;
			float: left;
			margin: 0 0 0 10px;
			max-height: 40px;
			max-width: 100px;
			min-width: 50px;
			padding: 0 0 0 5px;
		}
		.button1 .counter #fbcount { 
			border-top: 1px solid #eee; 
			border-right: 1px solid #eee; 
			border-bottom: 1px solid #eee; 
			border-left: 0px solid #eee; 
			color: #ff6600; 
			font: bold 14px/18px Helvetica, Arial, sans-serif; 
			height: 14px;
			max-width: 100px;
			overflow: hidden;
			padding: 12px 10px;
			text-align: center;
		}
	</style>
    
    <base target='_blank' />

</head>

<body>
	
			<div class="button1">
	            <?php
					$title=urlencode("Create a Custom Facebook Share Button with a Custom Counter");
					$url=urlencode("http://iofeed.org/test/button1.php/");
					$summary=urlencode("Learn how to create a custom Facebook 'Share' button, complete with a custom counter, for your website!");
					$image=urlencode("http://iofeed.org/test/image/5.jpg");
				?>
    	        <a id="button" onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[summary]=<?php echo $summary;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=550,height=400');" target="_parent" href="javascript: void(0)">
            	</a>  
	            <div class="counter">
    	        	<div id="fbcount"><?php	echo $fbcount; ?></div>
        		</div>
        	</div>
        	
        	
    <div id="fb-root"></div>
    <script src="http://connect.facebook.net/en_US/all.js"></script>

</body>
</html>
