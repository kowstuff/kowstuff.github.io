<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Instant Illustrator</title>
  </head>
	
  <body style="font-family: Arial;border: 0 none;" onload="">
		

		
		<?php

		# create and load the HTML
    require('simple_html_dom.php');
		// Create DOM from URL or file
		    $sear=urlencode ('hot dog');
				$phrase="https://www.google.com/search?q=$sear&tbm=isch&gws_rd=ssl";
				echo $phrase . '<br>';
				
    $html = file_get_html("https://www.google.com/search?q=$sear&tbm=isch&gws_rd=ssl");

		// Find all images 
    foreach($html->find('img') as $element) 
       //echo $element->src			 . $element . '<br>';
			 echo $element . '<br>';
			 
			 
		// Find all links 
    //foreach($html->find('div') as $element) 
    //   echo $element->plaintext . '<br>';
			 
		//	foreach($html->find('a') as $element) 
     //  echo $element->href . '<br>';
			?>

  </body>
</html>