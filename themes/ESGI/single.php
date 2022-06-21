<?php get_header() ?>
	<main>
		<div class="container">
			<div class="row">
				<article class="single-post col-md-6 offset-md-3">
					<header>
						<h1 class="post-title"><?php the_title(); ?></h1>
						<div class="post-meta">
							<?php 
							$author_id = $post->post_author;
							$author_name = get_the_author_meta('nickname', $author_id);
							?>
							<img src="<?= get_avatar_url($author_id) ?>" alt="<?= $author_name ?>">
							<?= $author_name ?>
							<time><?= date_i18n('j F Y', get_post_timestamp($post->ID)) ?></time>
						</div>
					</header>
					<div class="post-image">
						<?= get_the_post_thumbnail() ?>
					</div>
					<div class="post-content">
						<?php the_content() ?>
					</div>
					
				</article>

				<?php 
				$has_sidebar = get_theme_mod('has_sidebar', false);
				if($has_sidebar){
					echo '<div class="col-md-2 offset-md-1">';
					get_sidebar();
					echo '</div>';
				}
				?>

			</div>
			
		</div>
	</main>
<?php get_footer() ?>