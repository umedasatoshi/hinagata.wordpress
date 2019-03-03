<?php if( comments_open() ){ ?>
<aside id="comments">
	<p>Comments</p>
	<?php if( have_comments() ){ ?>
	<ol id="comments-list">
		<?php wp_list_comments(); ?>
	</ol>
	<?php paginate_comments_links(); ?>
	<?php } ?>
	<?php comment_form(); ?>
	<p class="hide"><?php _e('', 'hinagata.wordpress'); ?></p>
</aside>
<?php } ?>
