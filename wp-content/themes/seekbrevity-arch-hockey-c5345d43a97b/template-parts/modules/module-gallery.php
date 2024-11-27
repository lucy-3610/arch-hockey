<?php
/*
Thunder Bolt 2 - Template Parts - Modules
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Page Builder Module: Gallery
@package Thunder_Bolt_2
Updated Version: 1.0
*/

$cs = get_sub_field('cs');
?>


<div id="module-gallery-<?php echo $mod_count; ?>" class="module-gallery-wrapper module-wrapper wrapper color-scheme-<?php echo $cs; ?>">

<?php $images = get_sub_field('gallery');
	if( $images ): ?>
	<div class="gallery popup-gallery">
    <div class="grid">
      <?php foreach( $images as $image ): ?>
        <div class="grid-block">
           <a class="image-link <?php echo $image['alt']; ?>" 
           href="<?php echo $image['sizes']['large']; ?>"
           data-name="<?php echo $image['title']; ?>"
				   data-title="<?php echo $image['caption']; ?>"
	         data-video="<?php echo $image['description']; ?>"
	         style="background-image: url('<?php echo $image["sizes"]["large"]; ?>')"
	         /></a>
	       </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>

</div>
