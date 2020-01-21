<div id="mastheadInner">
  <div id="logoWrapper">
    <div id="siteLogo">
      <a href="<?=site_url()?>" id="siteLogo">
        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          if ( function_exists( 'the_custom_logo' ) ) {
           the_custom_logo();
          } else {
              echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
          }
        ?>
      </a>
    </div>
  </div>
</div>
