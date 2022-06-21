<?php get_header(); ?>


<main id="site-content">
	<div class="container">
		<?php
		include('template-parts/identity-card.php'); 
		?>
		<div class="row">
			<div class="col-6 offset-3">
				<div id="post-list-wrapper" >
					<?php
						include('template-parts/post-list.php');
					?>
				</div>
			
			</div>
		</div>
		
	</div>
</main>

<?php get_footer(); ?>