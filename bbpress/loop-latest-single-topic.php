<?php

/**
 * Topics Loop - Single
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
	<li>
		<ul>
		<li class="bbp-topic-title">

				<?php do_action( 'bbp_theme_before_topic_title' ); ?>

				<a href="<?php bbp_topic_permalink(); ?>" title="<?php bbp_topic_title(); ?>"><?php bbp_topic_title(); ?></a>

				<?php do_action( 'bbp_theme_after_topic_title' ); ?>

				<?php bbp_topic_pagination(); ?>

				<?php do_action( 'bbp_theme_before_topic_meta' ); ?>

				<?php do_action( 'bbp_theme_after_topic_meta' ); ?>

		</li>

		<li class="bbp-topic-reply-count">Replies: <?php bbp_show_lead_topic() ? bbp_topic_reply_count() : bbp_topic_post_count(); ?></li>

		<li class="bbp-topic-freshness">
				<p class="bbp-topic-meta">
					<?php do_action( 'bbp_theme_before_topic_freshness_author' ); ?>
					<span class="bbp-topic-freshness-author"><?php bbp_author_link( array( 'post_id' => bbp_get_topic_last_active_id(), 'size' => '14' ) ); ?></span>
					<?php do_action( 'bbp_theme_after_topic_freshness_author' ); ?>
				</p>
		</li>
		</ul>
	</li>
