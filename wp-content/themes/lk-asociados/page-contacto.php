[forminator_form id="7"]
<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lk-asociados
 */

get_header();
?>

<div class="contact">

    <div class="container">

        <div class="info_container">
            <span>Contacto</span>
            <h2>¡Comienza a potenciar <strong>tu proyecto ahora!</strong></h2>
            <p>Alcanza tus metas comerciales. Ponte en contacto con nuestro equipo para
                poder ayudarte a lanzar o mejorar tu tienda en línea
            </p>
            <div class="row">
                <div>
                    <span>Vía Atlixcayotl 5208,</span><br>
                    <span>Torre ejecutiva JV II, Piso 12</span><br>
                    <span>Tlaxcalancingo, 72821 Puebla,Pue.</span>
                </div>
                <div>
                    <a href="">221 597 4681</a>
                    <a href="">contacto@lkasociados</a>
                </div>
            </div>
        </div>

        <div class="form_container">
            <?php echo do_shortcode('[forminator_form id="7"]'); ?>
        </div>

    </div>

</div>

<?php
//get_sidebar(); no sider needed
get_footer();
