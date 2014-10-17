<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<section id="intro-paragraph" class="<?php echo get_post_custom_values("bannercolor")[0]; ?>-bg clearfix">
		<img src="../olbp/img/people_nobg.png" alt="" class="icon" />
		<h2><?php the_title(); ?></h2>
		<p><?php echo get_post_custom_values("bannertext")[0]; ?></p>
	</section>

	<section id="what">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					$post = get_post($id); 
					$content = apply_filters('the_content', $post->post_content); 
					echo $content;  
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						//comments_template();
					}
				endwhile;
				$test = wp_list_pages(array("post_type"=>"page")); 
				 echo '<pre>'; print_r($test); echo '</pre>';
				
			?>
	</section>
	<nav id="tab-nav">
		<ul>
			<li class="current"><a href="#">Gauging Interest</a></li>
			<li><a href="#">Building Interest</a></li>
			<li><a href="#">Maintaining Interest</a></li>
		</ul>
	</nav>
	<nav id="interest" class="clearfix">
		<article class="inner tab-content">
			<h3>Make sure your community is ready for a lab. Before you start planning, get a temperature check of the broader community. This check will enable you to answer a critical question:</h3>
			<h4 class="question">Can my community support a biolab? </h4>
			<p>A dedicated biolab requires amount of support from a community. Make sure there is sufficient commitment from a large enough community to enable the successful operation and utilization of a biolab. If you can't get the meaningful commitment of at least 10 people, strongly consider starting smaller at first. A biology club is a better way to start things off, until you cultivate a community large enough to support a biolab.</p>
			<h4 class="question">What are some good ways to get a temperature check of the community?</h4>
			<p><strong>Meetups.</strong> Meetup.com is a great tool and resource for tapping your community. Attend any science or biology-focused meetups in your town and gauge their level of interest in a community biolab. Start a meetup group to begin cultivating your town's biology community and build support for a biolab.</p>
			<p><strong>Attend events.</strong> Science fairs and lectures are great aggregators of the broader community. Attend or even set up a booth to start building interest in a community biolab.</p>
			<p><strong>Run small events.</strong> Host biology events that do not require a biolab. Activities like strawberry DNA extraction are a great way to give people a lightweight, hands-on experience. People who enjoy the activity may want to take their explorations further.</p>
		</article>
	</nav>
<footer id="mainfoot"></footer>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>