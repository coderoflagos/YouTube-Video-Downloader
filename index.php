<?php 
include('header.php');
include_once("db_connect.php");
?>
<link rel="stylesheet" href="css/style.css" />
<title>YouTube downloader with Php by Opemipo Disu</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
  body {
	padding-top: 40px;
	padding-bottom: 40px;
	background-image: url('img/image.jpg');
  }
</style>
<div class="container">
	<h2 align="center">Opemipo's YouTube video downloader</h2>	
	<form class="" method="get" id="download" action="getvideo.php" class="">
		<input type="text" name="videoid" style="height:30px" id="videoid" size="40" placeholder="YouTube Video ID" />
		<input class="btn btn-success" style="background:#3399ff;height:30px;color:white" type="submit" name="type" id="type"value="Download" />
		<p>Put in just the ID, the part after v=.</p>
		<p>Example: http://www.youtube.com/watch?v=<b>Wp-Dm-Swfeg</b></p>
		<?php

		include_once('config.php');
		function is_chrome(){
			$agent=$_SERVER['HTTP_USER_AGENT'];
			if( preg_match("/like\sGecko\)\sChrome\//", $agent) ){	
				if(!strstr($agent, 'Iron'))
					return true;
			}
			return false;	

		}
		?>
	</form>	
	
</div>
