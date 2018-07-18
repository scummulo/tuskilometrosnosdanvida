<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tuskilometrosnosdanvida
 */

?>

	</main><!-- #content -->

<footer id="footer">
	<div class="footer__up">
		<div class="footer__up--text">
			<h2>Dorsal solidario</h2>
			<p>¿Te gustaría estar este día pero no puedes? ¿Quieres colaborar de alguna manera con nosotros?¡No lo dudes, <b>DONA a través del Dorsal 0</b>! 100% destinado íntegramente a la investigación científica del Cáncer Infantil!
			</p>
			<p>
			¡Recuerda que está considerado una donación. No da derecho a camiseta ni dorsal para correr en el evento!</p>
			<button><a href="#">Dorsal 0</a></button>
		</div>
	</div>
	<div class="footer__down">
		<ul>
			<li>
				<a href="#">Contacto</a>
			</li>
			<li>
				<a href="#">Política de cookies</a>
			</li>
			<li>
				<a href="#">Política de privacidad</a>
			</li>
		</ul>
		<ul>
		<li>
			<a href="#">Facebook</a>
		</li>
		<li>
			<a href="#">Twitter</a>
		</li>
		<li>
			<a href="#">Youtube</a>
		</li>
		</ul>
	</div>
</footer>

<?php wp_footer(); ?>

<script src="<?php bloginfo('template_url'); ?>/dist/assets/js/static/swiper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/dist/assets/js/custom.js"></script>

</body>
</html>
