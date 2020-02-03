<?php
/**
 * The template for displaying the footer
 * @package hofmag
 */
?>

</main>

<footer class="footer mr1 ml1 mb1">

	<div class="socket">

		<div class="container fullwidth cols-4-16-4 cols-sm text-center-sm">

			<div class="col colophon"></div>

			<div class="col mandatory">
				<div>
					Hofmeir Magnetics. Ges.m.b.H &copy; <?php echo date ('Y');?> All Rights Reserved

					<span class="divider">|</span>

					<a href="<?php echo home_url() . '/terms-conditions'; ?>">Terms</a>

					<span class="divider">|</span>

					<a href="<?php echo home_url() . '/privacy-policy'; ?>">Privacy</a>
				</div>
			</div>

			<div class="col silverless">
				<a href="https://silverless.co.uk"><?php get_template_part('inc/img/silverless', 'logo');?></a>
			</div>

		</div>

	</div>

	</div><!--socket-->

</footer>

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
