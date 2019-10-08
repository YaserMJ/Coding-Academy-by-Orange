<?php
/**
 * The template part for displaying slider
 *
 * @package Medical Supplements Store
 * @subpackage medical_supplements_store
 * @since Medical Supplements Store 1.0
 */
?>
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="services-box">
    <div class="upper-box">
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <span class="entry-date"><?php the_date(); ?></span>
    </div>
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the video file.
        if ( ! empty( $video ) ) {
          foreach ( $video as $video_html ) {
            echo '<div class="entry-video">';
              echo $video_html;
            echo '</div>';
          }
        };
      }; 
    ?>
    <div class="lower-box">
      <div class="metabox">
        <i class="fas fa-user"></i><span class="entry-author"> <?php the_author(); ?></span>
        <i class="fas fa-comments"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','medical-supplements-store'), __('0 Comments','medical-supplements-store'), __('% Comments','medical-supplements-store') ); ?></span>
      </div>
      <p><?php the_excerpt();?></p>
      <div class="service-btn">
        <a href="<?php the_permalink(); ?>" title="<?php esc_attr_e('Read More','medical-supplements-store'); ?>"><?php esc_html_e('Read More','medical-supplements-store'); ?></a>
      </div>
    </div>
  </div>
</div>