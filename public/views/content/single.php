<?php
/**
 * Getbenonit ( content-page.php )
 *
 * @package   Getbenonit
 * @copyright Copyright (C) 2014-2021. Benjamin Lu
 * @license   GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */
?>
<article class="post">
	<header class="entry-header">
		<h1 class="entry-title"><?= e( $entry->title() ) ?></h1>
		<div class="entry-metadata">
		<?php if ( $entry->author() ) : ?>
				<span class="entry-author"><?php include( public_path( 'images/svg/user.svg.php' ) ); ?><a href="<?= e( $entry->author()->uri() ); ?>"><?= e( $entry->author()->title() ) ?></a></span>
			<?php endif ?>

			<?php if ( $entry->date() ) : ?>
				<span class="entry-date"><?php include( public_path( 'images/svg/calendar-alt.svg.php' ) ); ?><?= e( $entry->date() ) ?></span>
			<?php endif ?>
		</div>
	</header>
	<?php if ( $entry->meta() ) : ?>
		<figure class="post-thumbnail alignwide">
			<img src="<?php echo uri( $entry->meta( 'thumbnail' ) ); ?>" />
		</figure> 
    <?php endif; ?>
	<div class="entry-content">
		<?= $entry->content() ?>
	</div>
</article>