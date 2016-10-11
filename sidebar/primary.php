<?php if ( 'full' !== hybrid_get_theme_layout() ) : // If not a one-column layout. ?>

    <aside <?php hybrid_attr( 'sidebar', hybrid_get_theme_layout() ); ?>>

        <?php if ( is_active_sidebar( 'primary' ) ) : // If the sidebar has widgets. ?>

            <?php dynamic_sidebar( 'primary' ); // Displays the primary sidebar. ?>

        <?php endif; // End widgets check. ?>

    </aside><!-- #sidebar-primary -->

<?php endif; // End layout check. ?>