<?php $format = $entry->meta( 'format' ); ?>

<article class="post post-format-<?= $format ? e( $format ) : 'standard' ?>">

	<?php if ( 'aside' !== $format ) : ?>

		<header class="entry-header">
			<h1 class="entry-title"><a href="<?= e( $entry->uri() ) ?>"><?= e( $entry->title() ) ?></a></h1>
            <div class="entry-metadata">
            <?php if ( $entry->author() ) : ?>
					<span class="entry-author"><?php include( public_path( 'images/svg/user.svg.php' ) ); ?><a href="<?= e( $entry->author()->uri() ); ?>"><?= e( $entry->author()->title() ) ?></a></span>
				<?php endif ?>

				<?php if ( $entry->date() ) : ?>
					<span class="entry-date"><?php include( public_path( 'images/svg/calendar-alt.svg.php' ) ); ?><?= e( $entry->date() ) ?></span>
				<?php endif ?>
			</div>
		</header>

	<?php endif ?>

    <?php if ( $entry->meta() ) : ?>
        <figure class="post-thumbnail alignwide">
            <img src="<?php echo uri( $entry->meta( 'thumbnail' ) ); ?>" />
        </figure> 
    <?php endif; ?>

	<?php if ( 'aside' === $format ) : ?>
		<div class="entry-content">
			<?= $entry->content() ?>

		</div>
	<?php else : ?>
		<div class="entry-excerpt">
			<?= $entry->excerpt() ?>
		</div>
	<?php endif ?>

</article>