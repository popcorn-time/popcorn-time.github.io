<?php
  $t = json_decode(file_get_contents('../languages/'.$language.'.json'));
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--                                                                                                   
                                                        .,;+###+;:.                                 
                                                  .##;`             .'@:                            
                                              `@+                        +#                         
                                            #'                             `@`                      
                                         `@`                                 `@                     
                        ``:::.`         @.                                     +.                   
                    `#+`        ;@    `#                                        '.                  
                  `@              `@ :;                                          @                  
                 @`                 @;                                            +                 
                @                   ;                                             @                 
               @                                                                  @                 
               @                                                                 `+                 
               @                                                                 @                  
                @`                `..                             ..`           #.                  
                 `@;            '+#@. ';                      `:++@' .#        @.                   
                 `+#;.``       ;;#@@  ,@.                     `;+@@, `@@     `;;#+`                 
               .@              ::'######                       :;######+           @`               
              :,                ,;;'''+`                       `;;'''+:             .+              
              @                             `+'++++++++'++`                          ;,             
              ##   ``` `                    ''''''''''''''+                           @             
               @#, ```````                  '''''''''''''':                          .@             
                :#@# ``.```                  ''''''''''''+                         '#@              
                :,.;@@```.`````               ;'''''''''                        :@@@`               
                @``@  +'+.@'```````               ```                           '#@                 
                ',`.   ..+  ,@@`@.```                ``    `::   '@@@#  #@@@# @;   @`               
                 @`.   ,..  ;.,' ,`##``@@@.  '@@@. @'..;# @'''+:@     '#;;;;;@      @               
                 @..,  ...   ...  @.`#,   `#@;;;;'#      @;;;;;'       ;;;;;;       @               
                 ':..   ..   ,.:   ..       ;;;;;;`      ';;;;;'      ,;;;;;;       @               
                  @..   ,..  ,.:   ..       ;;;;;;.      ';;;;;;      :;;;;;'      ;,               
                  @,..  ,.:  `..   ...      ;;;;;;.      ';;;;;,      ';;;;;;      @                
                  ':.,   ,.   ..   .,.      ';;;;;.      ';;;;;.      ';;;;;.      @                
                   @.,   ..   ,.   :.:      ';;;;;.      ';;;;;       ;;;;;;       @                
                   @,,.  :,.  :,.  ,.:      ';;;;;.      ;;;;;;       ;;;;;'      ;.                
                   ;;,;  :,:  :,:  ,,:      ';;;;;.      ;;;;;;      `;;;;;'      @                 
                    @,,   ,:  `,:  .,:      ';;;;;.      ;;;;;'      :;;;;;:      @                 
                    @:,`  ,,   ,,   ,,      ';;;;;.      ;;;;;'      ';';;;`      #                 
                    :;:;  ;,`  ,,   ,,      ;;;;;;.      ;;;;;'      ';;;;;      '`                 
                     @,,  ,,:  ;,   ,,      :;;';;.      ;;;;;'      ';;';'      @                  
                     @::   :;  :,.  :,      :;;;;;.      ;;;;;:      ;';;;'      @                  
                     ,;::  ::  ,:;  ;,      :;;;;'.     `;;';',      ;;';',      +                  
                      @::  ;:   :;  :,`     .;;;;;.     ,;;';;.     :;;;''`     '                   
                      @::  .:,  ::  :,.     `;';;;.     :';;;;      ;;'';'      @                   
                      .#:,  :;  ;:  ,:,     `;';;;.     :;;'';      '';';'      @                   
                        `#; ;:  ::   :;      ;;';;.     ;';'''      ''';''     `'                   
                           `@'  ,:,  :;      ''';;.     ;'''''      ;'''',     +                    
                              .@,::  :;      ;''''.     ';;'''      ;';;;    `.@                    
                                 :@. ;:      ;''';.     ';;;'',:'#@@#+';,`                          
                                    :@;     `'++#@@##';,.`                                          
                                       ;,.`                                                          -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<meta name="description" content="Stream movies from torrents. Skip the downloads. Launch, click, watch." />
	<link rel="image_src" href="http://getpopcornti.me/images/header-ui.jpg" / >
  
	<meta property="og:title" content="Popcorn Time" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://getpopcornti.me/images/header-ui.jpg" />
	<meta property="og:url" content="http://getpopcornti.me" />
	<meta property="og:site_name" content="Popcorn Time" />

	<title>Popcorn Time</title>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-48382234-1', 'getpopcornti.me');
	  ga('send', 'pageview');
	</script>
</head>
<body class="beta">
	<section id="header">

		<nav class="fixed-width fadeInDown wow">
			<a href="http://getpopcornti.me" id="logo">Popcorn Time</a>
		</nav>

		<div class="text fadeInDown wow">
			<h1><?= $t->pickup ?></h1>
			<p><?= $t->pickupsubtitle ?></p>
		</div>

		<ul id="links">
			<li class="download dl-mac"><a href="https://mega.co.nz/#!9BREXTCa!Qs980yuyFTYQsmBxNUbrfhtM9
				<li class="mac icon-laptop fadeInUp wow" data-wow-delay=".2s"><a href="https://mega.co.nz/#!9BREXTCa!Qs980yuyFTYQsmBxNUbrfhtM9UzW148VucDBx6lKu3YUzW148VucDBx6lKu3Y" class="btn-main icon-mac" onclick="ga('send', 'event', 'Download', 'MacOS');" target="_blank"><?= $t->download ?></a><br /><small><?= $t->formac ?></small></li>
			<li class="download dl-win"><a href="https://mega.co.nz/#!NAghnRKY!jpB3adN_meEbBCL_us8kmhdGILwbYw248IEdN2bG-rM" class="btn-main icon-win" onclick="ga('send', 'event', 'Download', 'Windows');" target="_blank"><?= $t->download ?></a><br /><small><?= $t->forwindows ?></small></li>
			<!--<li class="social"><a href="http://facebook.com/getpopcorntime" class="btn-social btn-wide icon-facebook" target="_blank">Like Us</a></li>
			<li class="social"><a href="http://twitter.com/getpopcornapp" class="btn-social btn-wide icon-twitter" target="_blank">Follow Us</a></li>-->
		</ul>
		<img src="images/header-ui.jpg" class="ui-screenshot fadeInUp wow" alt="Popcorn Time UI">
	</section>

	<div class="container">
		<div class="warning fadeIn wow">
			<h5 class="icon-info"><?= $t->warning ?></h5>
			<p><?= $t->warningsubtitle ?></p>
		</div>
		<section id="features" class="fixed-width">
			<div class="clear-fix">
				<article class="fadeInLeft wow">
					<img src="images/icon-best.gif" alt="">
					<h5><?= $t->featureone ?></h5>
					<p><?= $t->featureonesubtitle ?></p>
				</article>

				<article class="fadeInRight wow">
					<img src="images/icon-watch.gif" alt="">
					<h5><?= $t->featuretwo ?></h5>
					<p><?= $t->featuretwosubtitle ?></p>
				</article>

				<article class="fadeInLeft wow">
					<img src="images/icon-search.gif" alt="">
					<h5><?= $t->featurethree ?></h5>
					<p><?= $t->featurethreesubtitle ?></p>
				</article>

				<article class="fadeInRight wow">
					<img src="images/icon-subs.gif" alt="">
					<h5><?= $t->featurefour ?></h5>
					<p><?= $t->featurefoursubtitle ?></p>
				</article>
			</div>

			<div class="width-50 align-center action fadeInUp wow">
				<img src="images/pochoclin.gif" alt="Pochoclin" class="align-center pochoclin">
				<hr />
				<h2><?= $t->itsfree ?></h2>
				<div class="dl-mac">
					<a href="https://mega.co.nz/#!9BREXTCa!Qs980yuyFTYQsmBxNUbrfhtM9UzW148VucDBx6lKu3Y" class="btn-main icon-mac" onclick="ga('send', 'event', 'Download', 'MacOS');" target="_blank"><?= $t->download ?></a>
					<small><?= $t->formac ?></small>
				</div>
				<div class="dl-win">
					<a href="https://mega.co.nz/#!NAghnRKY!jpB3adN_meEbBCL_us8kmhdGILwbYw248IEdN2bG-rM" class="btn-main icon-win" onclick="ga('send', 'event', 'Download', 'Windows');" target="_blank"><?= $t->download ?></a>
					<small><?= $t->forwindows ?></small>
				</div>
			</div>
		</section>

		<section id="how">
			<div class="fixed-width fadeInLeft wow">
				<h2><?= $t->hardtobelieve ?></h2>
				<h4><?= $t->hardtobelievesubtitle ?></h4>
				<ul class="steps">
					<li class="icon-eye"><?= $t->stepone ?></li>
					<li class="icon-hd"><?= $t->steptwo ?></li>
					<li class="icon-play"><?= $t->stepthree ?></li>
				</ul>
			</div>
			<img src="images/how-ui.jpg" class="ui-screenshot fadeInRight wow" alt="Popcorn Time UI">
		</section>

		<section id="get-app">
			<div class="fadeIn wow">
				<h2><?= $t->newway ?></h2>
				<p><?= $t->newwaysubtitle ?></p>
			</div>
			<ul class="platforms">
				<li class="mac icon-laptop fadeInUp wow" data-wow-delay=".2s"><a href="https://mega.co.nz/#!9BREXTCa!Qs980yuyFTYQsmBxNUbrfhtM9UzW148VucDBx6lKu3Y" " class="btn-main icon-mac" onclick="ga('send', 'event', 'Download', 'MacOS');" target="_blank"><?= $t->download ?></a><small><?= $t->formac ?></small></li>
				<li class="win icon-screen fadeInUp wow" data-wow-delay=".4s"><a href="https://mega.co.nz/#!NAghnRKY!jpB3adN_meEbBCL_us8kmhdGILwbYw248IEdN2bG-rM" class="btn-main icon-win" onclick="ga('send', 'event', 'Download', 'Windows');" target="_blank"><?= $t->download ?></a><small><?= $t->forwindows ?></small></li>
				<li class="browser icon-window fadeInUp wow" data-wow-delay=".6s"><a href="https://mega.co.nz/#!zMYlCKBD!AxBsn1ta0QwhRgA9uD56Xy3hs8w8MVDyDkpUNfzqAcY" class="btn-main icon-linux" onclick="ga('send', 'event', 'Download', 'Linux');" target="_blank"><?= $t->download ?></a><small><?= $t->forlinux ?></small></li>
			</ul>
		</section>

		<section id="browse-movies">
			<h2><?= $t->browsemovies ?></h2>
		</section>

		<section id="footer" class="fadeInUp wow">
			<hr style="display: none">
			<nav class="clear-fix">
				<a href="http://getpopcornti.me" class="logo">Popcorn time</a>
				<ul>
					<li class="social"><a href="https://facebook.com/getpopcorntime" target="_blank" class="icon-facebook"> </a></li>
					<li class="social"><a href="http://twitter.com/getpopcornapp" target="_blank" class="icon-twitter"> </a></li>
					<li class="github"><a href="http://github.com/popcorn-time" target="_blank" class="icon-github">Github</a></li>
					<li class="download dl-mac"><a href="https://mega.co.nz/#!9BREXTCa!Qs980yuyFTYQsmBxNUbrfhtM9UzW148VucDBx6lKu3Y" class="btn-main icon-mac" onclick="ga('send', 'event', 'Download', 'MacOS');" target="_blank"><?= $t->download ?></a><small><?= $t->formac ?></small></li>
					<li class="download dl-win"><a href="https://mega.co.nz/#!NAghnRKY!jpB3adN_meEbBCL_us8kmhdGILwbYw248IEdN2bG-rM" class="btn-main icon-win" onclick="ga('send', 'event', 'Download', 'Windows');" target="_blank"><?= $t->download ?></a><small><?= $t->forwindows ?></small></li>
                    <li class="download dl-linux"><a href="https://mega.co.nz/#!zMYlCKBD!AxBsn1ta0QwhRgA9uD56Xy3hs8w8MVDyDkpUNfzqAcY" class="btn-main icon-linux" onclick="ga('send', 'event', 'Download', 'Linux');" target="_blank"><?= $t->download ?></a><small><?= $t->forlinux ?></small></li>
                </ul>
			</nav>
			<footer>
				<hr>
				<i class="film"></i>
				<p>Made with <span>&lt;3</span> by a bunch of geeks from Buenos Aires<br /> <small><a href="tos.html">Terms of Service</a></small></p>
			</footer>
		</section>
	</div>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/site.js"></script>
</body>
</html>
