<!DOCTYPE html>
<html lang="en">

<head>
    <title>Versions</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
        text-align: center;
	    font-family: Verdana, sans-serif;
	    line-height: 1.462;
	    background-color: #F5F7F7;
	    color: #002b50;
    }
    
    p {
	    margin: 0;
    }
    
    a {
	    color: inherit;
	    text-decoration: none;
	
	    &:hover {
	        text-decoration: underline;
	        cursor: pointer;
	        color: inherit;
	    }
	}
    
    small {
	    font-size: 0.6em;
    }
    
    .c-version:first-child p{
	    font-size: 3em;
    }
    
    .c-version:first-child small{
    	font-size: 0.4em;
	}
    
    .c-version:not(:last-child){
	    margin-bottom: 1em;
	    padding-bottom: 1em;
		border-bottom: 2px solid #fff;
    }
</style>
</head>

<body>

	<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
		<?php 
		
		$dirs = glob('../versions/*' , GLOB_ONLYDIR);
		usort($dirs, create_function('$a,$b', 'return filectime($b) - filectime($a);'));

		foreach($dirs as $dir){
			printf('<div class="c-version"><p><small>%s</small></p>', date ("F d Y, H:i", filectime($dir)));
			printf('<p><a href="//%s.paul.em87.io" target="_blank">%s.paul.em87.io</a></p></div>', basename($dir), basename($dir));
		}
		
		?>
	</div>

</body>

</html>