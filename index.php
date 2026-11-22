<?php get_header(); ?>

<?php if ( is_home() && ! is_paged() ) : ?>
	<section class="hero">
		<div class="container">
			<h1>LASU Alumni Association</h1>
			<p>Connecting graduates of Lagos State University worldwide. For Truth and Service.</p>
			<a href="<?php echo esc_url( home_url( '/membership' ) ); ?>" class="btn">Join Us</a>
			<a href="<?php echo esc_url( home_url( '/events' ) ); ?>" class="btn btn-secondary">Upcoming Events</a>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<h2 class="section-title">What We Offer</h2>
			<div class="cards">
				<div class="card">
					<h3>Networking</h3>
					<p>Connect with fellow alumni across industries and locations.</p>
				</div>
				<div class="card">
					<h3>Events & Reunions</h3>
					<p>Stay informed about homecoming, chapter meetings, and professional events.</p>
				</div>
				<div class="card">
					<h3>Give Back</h3>
					<p>Support current students through mentorship, donations, and scholarships.</p>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<section class="section">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>
					<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="post-meta"><?php the_date(); ?></div>
					<div class="post-excerpt"><?php the_excerpt(); ?></div>
				</article>
			<?php endwhile; ?>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p>No posts found.</p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
