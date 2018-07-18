<?php
/**
 * Template Name: Home
 *
 * @package tuskilometrosnosdanvida
 */

 get_header(); ?>

<section class="hero">
        <div class="hero__title">
            <span>6ª Carrera solidaria por la <br> lucha contra el cancer infantil</span>
            <h1>Tus kilómetros <br>nos dan vida</h1> 
            <span class="place">Parque del Alamillo</span>
            <span class="date">Sevilla, 28 de octubre de 2018</span>
        </div>
        <div class="hero__sponsors">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/fundacionlacaixa.png" alt="caixa">
                    </div>
                    <div class="swiper-slide">
                    <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/fundacionrobertoarnal.png" alt="fundacionrobertoarnal">
                    </div>
                    <div class="swiper-slide">
                    <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/mayoral.png" alt="mayoral">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/stef.png" alt="stef">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/helvetia.png" alt="helvetia">
                    </div>
                    <div class="swiper-slide">
                    <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/sprintchip.png" alt="sprintchip">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/nhcollection.png" alt="nhcollection">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/ideasconalma.png" alt="ideasconalma">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php bloginfo('template_url'); ?>/dist/assets/img/peugeot.png" alt="peugeot">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

 <?php
 get_footer();
