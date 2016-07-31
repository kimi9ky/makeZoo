	<style type="text/css">
	.link-area {
		width: 240px;
		text-overflow: ellipsis;
		overflow: hidden;
		white-space: nowrap
	}
	.modifyTab {
		float: right;
		border-radius: 5px;
		padding-left: 5px;
		padding-right: 5px;
		background-color: rgb(237, 104, 106);
		font-size: 13px;
		color: white;
		margin-top: 10px;
		margin-left: 10px;
		position:relative;
	}
	</style>

	<?php while ($ultimatemember->shortcodes->loop->have_posts()) { $ultimatemember->shortcodes->loop->the_post(); $post_id = get_the_ID(); ?>

		<div class="um-item">
			<div class="um-item-link link-area">
				<i class="um-icon-ios-paper"></i>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></br>				<?php
				$url = get_bloginfo('url');
				if (current_user_can('edit_post', $post_id)){
					echo '<a class="delete-post" href="';
					echo wp_nonce_url("$url/wp-admin/post.php?action=delete&post=$post_id", 'delete-post_' . $post_id);
					echo '"><div class="modifyTab">删除</div></a>';
				}
				?>
				<a href="<?php echo apply_filters('gform_update_post/edit_url', $post_id, home_url('/?page_id=477/'));?>"><div class="modifyTab">编辑</div></a>
			</div>

			<?php if ( has_post_thumbnail( $post_id ) ) {
					$image_id = get_post_thumbnail_id( $post_id );
					$image_url = wp_get_attachment_image_src( $image_id, 'full', true );
			?>
			
			<div class="um-item-img"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'medium' ); ?></a></div>
			
			<?php } ?>
			
			<div class="um-item-meta">
				<span><?php echo sprintf(__('%s ago','ultimatemember'), human_time_diff( get_the_time('U'), current_time('timestamp') ) ); ?></span>
				<span>in: <?php the_category( ', ' ); ?></span>
				<span><?php comments_number( __('no comments','ultimatemember'), __('1 comment','ultimatemember'), __('% comments','ultimatemember') ); ?></span>
			</div>
		</div>
		
	<?php } ?>
	
	<?php if ( isset($ultimatemember->shortcodes->modified_args) && $ultimatemember->shortcodes->loop->have_posts() && $ultimatemember->shortcodes->loop->found_posts >= 10 ) { ?>
	
		<div class="um-load-items">
			<a href="#" class="um-ajax-paginate um-button" data-hook="um_load_posts" data-args="<?php echo $ultimatemember->shortcodes->modified_args; ?>"><?php _e('load more posts','ultimatemember'); ?></a>
		</div>
		
	<?php } ?>