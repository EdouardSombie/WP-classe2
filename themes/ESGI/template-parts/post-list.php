<?php 
if(!isset($the_query)){
	$paged = get_query_var('paged') != null ? get_query_var('paged') : 1; 
	$args = [
        'post_type' => 'post',
        'posts_per_page' => 2,
        'post_status' => 'publish',
        'paged' => $paged
    ];
    $the_query = new WP_Query($args);
}
?>

<div class="post-list-wrapper">
	<ul class="post-list">
		<?php 
		if($the_query->have_posts()){
			while($the_query->have_posts()){
				$the_query->the_post();
				$post = get_post();
				?>
				<li>
					<a href="<?= get_permalink($post->ID) ?>">
						<article>
							<h1><?= $post->post_title ?></h1>
							<time><?= date_i18n('j F Y', get_post_timestamp($post->ID)) ?></time>
						</article>
					</a>
				</li>
			<?php }
		} ?>
	</ul>
</div>
<div class="post-list-pagination">
	<?= paginate_links([
			'base' => get_permalink(get_option('page_for_posts')) . '%_%',
			'total' => $the_query->max_num_pages,
			'current' => $paged
		]) ?>
</div>