<div class="row justify-content-md-center">
	<div class="col-md-10 general-content">
		<?php the_content(); ?>
	</div>
</div>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
