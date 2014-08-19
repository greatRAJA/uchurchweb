      <!-- /container -->
	  
	</body>
	<div id="footer" class="container-fluid">
		<div class="row add-padding-bottom">
			<div class="col-md-2 col-md-offset-1 col-sm-3">
				<a href="http://www.adventist.org/"><img id="adventist-logo" src="<?php bloginfo('template_url'); ?>/img/AdventistLogo.png"/></a>
			</div>
			<div class="verticalLine"></div>
			<div class="col-md-2 col-sm-4">
				<h4 class="white">Church Life</h4>
				<ul class="footer">
					<li><a href="/wordpress/index.php/ministry-schedule">Ministry Calendar</a>
					<li><a href="/wordpress/index.php/events-calendar">Events Calendar</a>
					<li><a href="/wordpress/index.php/plan-a-visit">Plan A Visit</a>
			</div>
			<div class="verticalLine"></div>
			<div class="col-md-2 col-sm-4">
				<h4 class="white">Partners</h4>
				<ul class="footer">
					<li><a href="http://campushope.com/">CAMPUS</a></li>
					<li><a href="http://emmanuelinstitute.org/">Emmanuel Institute</a></li>
					<li><a href="http://www.misda.org/">MI Conference</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true]'); ?>
			</div>
		</div>
	</div>
</html>