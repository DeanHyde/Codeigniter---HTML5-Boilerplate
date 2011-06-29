		</div>
		<footer>
			
		</footer>
	</div><!--! end of #container -->
	
	<!-- JavaScript at the bottom for fast page loading -->
  <!-- jQuery -->
	<script src="<?php echo base_url().FOLDER_JSLIB; ?>jquery-1.6.1.min.js"></script>
	
	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php echo base_url().FOLDER_JS; ?>plugins.js"></script>
	<script src="<?php echo base_url().FOLDER_JS; ?>script.js"></script>
	<!-- end scripts-->
	
	<!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview'],['_trackPageLoadTime']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
  
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
    <script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
  <![endif]-->
  
</body>
</html>