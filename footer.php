<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anthonys
 */

?>

	<footer id="colophon" class="site-footer relative">

		<div class="footer-bg"></div>
		<div class="container">
			<a class="footer-logo-link" href="<?= esc_url(home_url('/'))?>">
				<img class="footer-logo" src="<?=get_template_directory_uri()?>/img/anthonys-white.png" alt="Anthony's Logo">
			</a>
			<div class="footer-links">
				<div class="flex-row">
					<div class="row-1">
						<a href="#">
							<span>Blog</span>
							<span>Blog</span>
						</a>
						<a href="#">
							<span>Recipe</span>
							<span>Recipe</span>
						</a>
						<a href="#">
							<span>Contact</span>
							<span>Contact</span>
						</a>
						<a href="#">
							<span>About</span>
							<span>About</span>
						</a>
					</div>
					<div class="row-2">
						<a href="#">
							<span>Instagram</span>
							<span>Instagram</span>
						</a>
						<a href="#">
							<span>Facebook</span>
							<span>Facebook</span>
						</a>
						<a href="#">
							<span>Twitter</span>
							<span>Twitter</span>
						</a>
					</div>
				</div>
				<div class="copyright">
					<span>copyright 2024 &copy; Anthony's</span>
					<span>|</span>
					<span>for educational purposes only</span>
				</div>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
