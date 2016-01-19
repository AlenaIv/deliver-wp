<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer>
	<div class="container">
		<div class="wid row">
			<div class="col-md-5">
		<?php if( dynamic_sidebar('footer') ) : else : endif; ?>
			</div>
			<div class="col-md-2">
				<?php if( dynamic_sidebar('contact_info') ) : else : endif; ?>
			</div>
			<div class="col-md-2">
				<?php if( dynamic_sidebar('quick_links') ) : else : endif; ?>
			</div>
			<div class="col-md-3">
				<?php if( dynamic_sidebar('newsletter') ) : else : endif; ?>
			</div>
		</div>
		</div>
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div class="copyright col-md-6">
				<h2>Copyright 2013 </h2>
				<span>Deliver</span>
				<h2>. All rights reserved.</h2>
			</div>
			<div class="about col-md-6">
				<a href="#">About</a>
				<span> / </span>
				<a href="#">Privacy policy</a>
				<span> / </span>
				<a href="#">Contact</a>
			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->


</body>
</html>
