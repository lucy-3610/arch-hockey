<?php

/**
 * The template for displaying the footer
 */
?>

</div><!-- #content -->

<!-- Footer
		========================= -->
<footer id="colophon" class="footer">
	<?php get_template_part('template-parts/footer/footer', 'content'); ?>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- <script src="/shuffle.js"></script> -->

<!-- Page Footer Scripts -->
<?php the_field('footer_script', false, false); ?>

<!-- Global Footer Scripts -->
<?php
$footer_scripts = get_field('footer_scripts', 'option', false, false);

if ($footer_scripts) :
	echo $footer_scripts;
endif;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>