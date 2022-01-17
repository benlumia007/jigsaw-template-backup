<?php
/**
 * Default home template.
 *
 * @package   Succotash
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2014-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */
?>
<?php Benlumia007\Alembic\Engine::display( 'header', [], [ 'title' => ! empty( $title ) ? $title : '' ] ); ?>
<section id="content" class="site-content">
	<div id="layout" class="right-sidebar">
		<main id="primary" class="content-area">
			<?php foreach ( $entries->all() as $entry ) : ?>
				<?php Benlumia007\Alembic\Engine::display( 'content/page', [ $entry->type()->name() ], [ 'entry' => $entry ] ); ?>
			<?php endforeach ?>
		</main>
		<aside id="secondary" class="widget-area">

		</aside>
	</div>
</section>
<?php Benlumia007\Alembic\Engine::display( 'footer' ); ?>