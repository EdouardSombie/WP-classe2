<ul class="post-list">
	<?php 
	foreach ($posts as $p) {
		echo '<li><a href="' . get_permalink($p->ID) . '">' . $p->post_title . ' <time>' . date_i18n('j F Y', $p->post_date) . '</time></a></li>';
	}
	?>
</ul>