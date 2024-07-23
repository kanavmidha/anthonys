<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anthonys
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'anthonys' ); ?></a>

	<header id="masthead" class="site-header flex-row-between">
		<nav class="secondary-nav relative">
			<div class="secondary-menu">
				<ul>
					<li><a href="#">
						<span>Instagram</span>
						<span>Instagram</span>
					</a></li>
					<li><a href="#">
						<span>Facebook</span>
						<span>Facebook</span>
					</a></li>
					<li><a href="#">
						<span>Twitter</span>
						<span>Twitter</span>
						<span>Twitter</span>
					</a></li>
				</ul>
			</div>
		</nav>

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$anthonys_description = get_bloginfo( 'description', 'display' );
			if ( $anthonys_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $anthonys_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="navigation relative">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<div class="flex-col">
					<span class="line line-1"></span>
					<span class="line line-2"></span>
					<span class="line line-3"></span>
				</div>
			</button>
			<div class="menu">
				<ul>
					<li><a href="#">
						<span>Blog</span>
						<span>Blog</span>
					</a></li>
					<li><a href="#">
						<span>Recipes</span>
						<span>Recipes</span>
					</a></li>
					<li><a href="#">
						<span>Contact</span>
						<span>Contact</span>
					</a></li>
					<li><a href="#">
						<span>About</span>
						<span>About</span>
					</a></li>
				</ul>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
