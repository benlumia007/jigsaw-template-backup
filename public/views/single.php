<?php
/**
 * Default home template.
 *
 * @package   Benjlu
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2014-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */
?>
<?php Benlumia007\Alembic\Engine::display( 'header', [], [ 'title' => ! empty( $title ) ? $title : '' ] ); ?>
<section id="content" class="site-content">
    <main id="main" class="content-area">
        <?php foreach ( $entries->all() as $entry ) : ?>
            <?php Benlumia007\Alembic\Engine::display( 'content/single', [ $entry->type()->name() ], [ 'entry' => $entry ] ); ?>
        <?php endforeach ?>
    </main>
</section>
<?php Benlumia007\Alembic\Engine::display( 'footer' ); ?>