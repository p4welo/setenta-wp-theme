<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
?>

<div class="col-sm-12 panel panel-default post-panel animated fadeIn">
  <a href="<?php the_permalink(); ?>">
    <img class="thumbnail col-sm-12 col-xs-12 lozad" data-src="<?php echo $thumb_url[0];?>">
  </a>

  <div class="col-sm-12">
    <h2>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_title(); ?>
      </a>
    </h2>
  </div>
</div>

