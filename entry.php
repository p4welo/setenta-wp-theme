<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
?>

<div style="box-shadow: 0 1px 3px rgba(0,0,0,.12), 0 1px 2px rgba(0,0,0,.24)">
  <a href="<?php the_permalink(); ?>"
      class="thumbnail animated fadeIn"
      title="<?php the_title_attribute(); ?>">
    <img src="<?php echo $thumb_url[0];?>"
        alt="<?php the_title_attribute(); ?>" class="lozad">
    <div class="caption text-center">
      <h3><?php the_title(); ?></h3>
    </div>
  </a>
</div>



