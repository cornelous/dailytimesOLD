<?php
// Return early if no widget found.
if ( ! is_active_sidebar( 'primary' ) ) {
	return;
}

// Return early if user uses 1 column layout.
if ( in_array( get_theme_mod( 'theme_layout' ), array( '1c' ) ) ) {
	return;
}
?>

<div id="secondary" class="widget-area widget-primary sidebar2 column" role="complementary" aria-label="<?php echo esc_attr_x( 'Primary Sidebar', 'Sidebar aria label', 'supernews' ); ?>" <?php hybrid_attr( 'sidebar', 'primary' ); ?>>
<?php if ( !is_singular( 'post' ) ) : // If viewing a single post page. ?>
    <div align="center">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 336x280 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:336px;height:280px"
             data-ad-client="ca-pub-8405479344707225"
             data-ad-slot="1079671995"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
<?php endif; // End check for type of page being viewed. ?>

    <?php dynamic_sidebar( 'primary' ); ?>
</div><!-- #secondary -->