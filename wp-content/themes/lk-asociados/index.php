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

<main id="primary" class="site-main">

	<section class="home_banner">

		<!-- some web browsers lock the autoplay feature -->
		<video class="home_banner_video" autoplay loop muted>
			<!-- modify this if is mp4, webm format is recomended -->
			<source src="ruta-del-video.webm" type="video/mebm">
		</video>

		<div class="container">

			<div class="home_banner_text">
				<p>Somos <strong>LK Asociados</strong>consultora de</p>
				<h1>Diseño de productos
					y servicios</h1>

				<p>Nos enfocamos en <span class="underlined">crear</span> y <span class="underlined">transformar</span>, ideas, productos,
					experiencias y organizaciones que buscan innovar en el mundo</p>

				<div class=" anchor_container">
					<a href="#">Hablemos</a>
					<!-- arrow -->
					<img src="" alt="">
				</div>

			</div>
		</div>

	</section>

	<section class="home_about">

		<div class="container">

			<h3>Consultora de <strong>Diseño Estratégico</strong></h3>
			<p>Resultados immpulsados por diseño centrado en las personas</p>

			<h4>Somos</h4>
			<p class="colored_selection_text">
				Una consultora de diseño estratégico que le apasiona ayudar a las empresas
				a <strong>entender sus desafíos de raíz y diseñar estrategias centradas en el usuario y la innovación</strong>, para mejorar productos, servicios y experiencias para hacer crecer los negocios.
			</p>

		</div>

	</section>

	<div class="animated_text">
		<h2>Diseño Centrado en las personas.</h2>
	</div>

	<section class="home_services">

		<div class="container">

			<h2><strong>Laboratorio</strong>de innovación y diseño</h2>
			<div class=" anchor_container">
				<a href="#">Conoce nuestros servicios</a>
				<!-- arrow -->
				<img src="" alt="">
			</div>

			<div class="home_services_columns">

				<div class="home_services_column">

					<div class="service_container">
						<div class="number_container">
							<span class="number">01</span>
						</div>
						<div class="row green_line">
							<h2>Design Research</h2>
							<h3>Investigaciones de usuarios</h3>

							<div class="img_container">
								<img src="" alt="">
							</div>
						</div>

						<p>
							<strong>Recopilamos información valiosa</strong> sobre tus clientes, sus
							necesidades y comportamientos. La investigación de usuario
							es una <strong>herramienta clave para desarrollar soluciones de
								diseño efectivas y rentables</strong>. Nuestro equipo trabaja mano a
							mano contigo para diseñar un plan de investigación a medida
							que te permita entender mejor a tu mercado.
						</p>

						<ul class="green_list">
							<li>Entendimiento del mercado</li>
							<li>Análisis de tendencia (Nuevos Futuros)</li>
							<li>Análisis de viabilidad de negocios</li>
							<li>Desarrollo de Buyer Personas</li>
							<li>Análisis de competencia</li>
						</ul>
					</div>

					<div class="service_container">
						<div class="number_container">
							<span class="number">02</span>
						</div>
						<div class="row orange_line">
							<h2>Diseño estratétgico</h2>
							<h3>Service design</h3>

							<div class="img_container">
								<img src="" alt="">
							</div>
						</div>

						<p>
							<strong>Creamos soluciones creativas y efectivas</strong> para satisfacer las
							necesidades de tus clientes. <strong>A partir de una comprensión
								profunda de tu negocio y objetivos, diseñamos una
								estrategia personalizada</strong> de diseño que te permita alcanzar
							tus metas. Desde la creación de marca hasta la optimización
							de la experiencia del usuario, <strong>cada solución se adapta a tu
								estrategia de negocio general</strong>.
						</p>

						<ul class="orange_list">
							<li>Diseño de modelos de negocio</li>
							<li>Desarrollo de MVP</li>
							<li>Estrategia de comunicación, marketing y venta</li>
							<li>Diseño de productos y servicios</li>
							<li>Diseño de la experiencia de cliente</li>
							<li>Diseño UX/UI</li>
							<li>Creación de ecommerce</li>
							<li>Creación de elearning</li>
							<li>Diseño de marcas</li>
							<li>Talleres de co-creación</li>
						</ul>
					</div>

					<div class="service_container">
						<div class="number_container">
							<span class="number">03</span>
						</div>
						<div class="row red_line">
							<h2>Growth Marketing</h2>
							<h3>Mentalidad de crecimiento</h3>

							<div class="img_container">
								<img src="" alt="">
							</div>
						</div>

						<p>
							Sabemos que el crecimiento y la expansión son
							fundamentales para el éxito de tu negocio. <strong>Por ello hacemos
								marketing basado en datos no en suposiciones. Aplicamos
								la experimentación y la ciencia para poder aumentar tus
								conversiones y resultados</strong>. Buscamos formas de hacer las
							cosas más rápido y <strong>pensando siempre como vender a mas
								clientes, aumentando la visibilidad y credibilidad</strong>.
						</p>

						<ul class="red_list">
							<li>Marketing perfomance(publicidad digital)</li>
							<li>Growth Marketing</li>
							<li>Lanzamiento de productos y servicios</li>
							<li>Posicionamiento en buscadores (SEO y SEM)</li>
							<li>Comunicación estratégica para tu marca</li>
						</ul>
					</div>

					<div class="service_container">
						<div class="number_container">
							<span class="number">04</span>
						</div>
						<div class="row purple_line">
							<h2>Transformación y diseño organizacional</h2>
							<h3>Cultura de innovación</h3>

							<div class="img_container">
								<img src="" alt="">
							</div>
						</div>

						<p>
							Sabemos que el crecimiento y la expansión son
							fundamentales para el éxito de tu negocio. <strong>Por ello hacemos
								marketing basado en datos no en suposiciones. Aplicamos
								la experimentación y la ciencia para poder aumentar tus
								conversiones y resultados</strong>. Buscamos formas de hacer las
							cosas más rápido y <strong>pensando siempre como vender a mas
								clientes, aumentando la visibilidad y credibilidad</strong>.
						</p>

						<ul class="purple_list">
							<li>Diseño de cultura, visión y propósito organizacional</li>
							<li>Experiencia del empleado (EVP)</li>
							<li>Creación y mejora de procesos</li>
							<li>Optimización de equipos digitales</li>
							<li>Rediseño de modelo operativo hacia flujos de valor</li>
							<li>Comunicación organizacional y endomarketing</li>
							<li>Implementación de sistemas OKRs</li>
							<li>Transformación digital</li>
						</ul>
					</div>

				</div>

				<div class="fixed_video_column">
					<video>
						<source src="ruta-del-video">
					</video>
				</div>

			</div>

		</div>

	</section>

	<section class="home_how">

		<div class="container">

			<h2>Cómo convertirse en una empresa
				<strong>Invencible, que innova y crea más valor</strong>
			</h2>
			<h3>Descubre los beneficios de trabajar con <span class="underlined">nuestra metodología</span></h3>

			<p>Ayudamos a las organizaciones para reinventarse antes de convertirse en empresas obsoletas, explorando el futuro, mientras sobresalen en explotar el presente</p>

			<div class="row">
				<div class="row_element_container">

					<div class="icon_container">
						<img src="" alt="">
					</div>
					<div class="text-container">
						<strong>
							<a data-content="c_i" href="#">Cultura de innovación</a>
						</strong>
					</div>
				</div>

				<div class="row_element_container">
					<div class="icon_container">
						<img src="" alt="">
					</div>
					<div class="text-container">
						<strong>
							<a data-content="b_i" href="#">Beneficios de la innovación</a>
						</strong>
					</div>
				</div>
			</div>

			<div class="content c_i">
				<h4><strong>Alineación</strong>para el enfoque correcto</h4>
				<p>Para dar inicio a tu proyecto <span class="underlined">analizamos</span> tu objetivo y situación actual, para identificar que tipo
					de innovación trabajaremos, nos enfocaremos en la estrategia que mejor te convenga:</p>

				<div class="grid">
					<div class="grid_element_container">
						<div class="img_container">
							<img src="" alt="">
						</div>
						<div class="text_container">
							<div class="animated_title">
								<strong>Mejorar</strong>
							</div>
							<p>Mejorar el servicio o producto actual, mejorando la operatividad y experiencia de cliente de manera sustancial</p>
						</div>
					</div>

					<div class="grid_element_container">
						<div class="img_container">
							<img src="" alt="">
						</div>
						<div class="text_container">
							<div class="animated_title">
								<strong>Fortalecer</strong>
							</div>
							<p>Fortalecer y mantener el valor de tu negocio, creando nuevas experiencias, nuevos canales, nuevos mercados</p>
						</div>
					</div>

					<div class="grid_element_container">
						<div class="img_container">
							<img src="" alt="">
						</div>
						<div class="text_container">
							<div class="animated_title">
								<strong>Crecer</strong>
							</div>
							<p>Creación de productos y servicios que complementan tu oferta actual</p>
						</div>
					</div>

					<div class="grid_element_container">
						<div class="img_container">
							<img src="" alt="">
						</div>
						<div class="text_container">
							<div class="animated_title">
								<strong>Transformar</strong>
							</div>
							<p>Cambiar radicalmente tu core business, explorar oportunidades fuera de tu campo tradicional</p>
						</div>
					</div>
				</div>
			</div>

			<div class="content b_i">
				<!-- add b_i content -->
			</div>

		</div>

	</section>

	<section class="home_challenges">
		<div class="container">
			<h2>Cómo afrontamos los retos del <strong>diseño estratégico</strong></h2>
			<div class="animation_container">
				<img src="" alt="">
			</div>

		</div>
	</section>

	<section class="home_co_creating_slider">
		<div class="container">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<h4><strong class="aqua">Co-creando</strong> para mejorar y transformar</h4>
						<p>Trabajamos con nuestros clientes para co-crear soluciones efectivas. Trabajamos en un ambiente de colaboración y empatía, fomentando la comunicación abierta y la retroalimentación constante para asegurarnos de que la solución final sea la ideal para todas las partes involucradas.</p>
					</div>

					<div class="swiper-slide">
						<h4><strong class="aqua">Importancia </strong>del diseño centrado en el usuario</h4>
						<p>A través del diseño estratégico podremos resolver problemas de tu empresa de forma creativa y crítica. Al trabajar juntos, podemos desarrollar soluciones personalizadas que impulsen el crecimiento de tu empresa y mejoren la experiencia de tus clientes.</p>
					</div>

					<div class="swiper-slide">
						<h4><strong class="aqua">Design Thinking</strong>para los negocios</h4>
						<p>
							Aplicamos un enfoque creativo y colaborativo que nos permite comprender las necesidades de nuestros usuarios y encontrar soluciones innovadoras. Mediante la <strong>exploración, definición, ideación, creación de prototipos y prueba de soluciones</strong>. ¡Eso es Design Thinking! de esa forma podemos pasar de una idea abstracta a una solución concreta y efectiva, siempre con la experiencia del usuario en el centro.
						</p>
					</div>

					<div class="swiper-slide">
						<h4>¿<strong class="aqua">Por qué</strong> debemos poner al usuario en el centro?</h4>
						<p>
							Es la razón de ser de cualquier producto o servicio. Al poner al usuario en el centro, nos aseguramos de que nuestras decisiones de diseño estén basadas en datos reales y no en suposiciones o prejuicios. Es la clave para crear experiencias únicas que se conecten con ellos en un nivel emocional, y hacer que se sientan valorados y escuchados.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="home_methodology">

		<div class="container">
			<h2><strong>Metodología</strong>para explorar, diseñar, crecer y transformar</h2>
			<h3>Cómo trabajamos</h3>

			<div class="grid">
				<div class="row">
					<div class="text_container">
						<p>
							En cada proyecto, adoptamos metodologías <span class="underlined">"Lean-Agile"</span> que impulsan la innovación y la transformación. Nos esforzamos por fomentar una mentalidad curiosa y creativa en nuestros clientes, alentando la imaginación y el coraje para tomar riesgos en el proceso.
						</p>
					</div>
					<div class="img_container">
						<img src="" alt="">
					</div>
				</div>

				<div class="row">
					<div class="img_container">
						<img src="" alt="">
					</div>
					<div class="text_container">
						<p>Creemos que la <strong>innovación verdadera</strong> solo se logra cuando se pasa de simplemente "hacer" cosas a "ser" innovador. Nuestra metodología es una forma práctica y profesional de hacerlo, y nos permite ayudar a nuestros clientes a alcanzar sus objetivos de manera efectiva y eficiente.</p>
					</div>
				</div>
			</div>

			<div class="lists_columns">
				<div class="list_container">
					<ul>
						<li>Design Thinking</li>
						<li>Design Research</li>
						<li>Lean Startup</li>
						<li>Talleres de co-creación</li>
						<li>Buyer-persona</li>
					</ul>
				</div>
				<div class="list_container">
					<ul>
						<li>Visual UI Design</li>
						<li>Customer Journey</li>
						<li>Mapa de experiencia</li>
						<li>Content Strategy</li>
						<li>Experimentación</li>
					</ul>
				</div>
				<div class="list_container">
					<ul>
						<li>User stories</li>
						<li>Jobs to be donde</li>
						<li>A/B testing</li>
						<li>Wireframing</li>
						<li>Prototipado</li>
					</ul>
				</div>
			</div>

			<div class="animation">
				<img src="#" alt="">
			</div>

		</div>

	</section>

	<section class="home_brands">
		<div class="container">
			<h2><strong>Marcas</strong>que han
				confiado en nosotros</h2>
			<p>
				Estos clientes confiaron en nuestra capacidad y creatividad para poder resolver sus desafíos,
				aplicamos tumamáeshombre nuestra metodología y proceso para mejorar, fortalecer, hacer crecer o transformar su organización
			</p>

			<div class="logos-grid">
				<!-- add here all the brand logotypes, copy and paste the logo_container -->
				<div class="logo_container">
					<img src="" alt="">
				</div>

				<div class="logo-container">
					<img src="" alt="">
				</div>

				<div class="logo-container">
					<img src="" alt="">
				</div>

				<div class="logo-container">
					<img src="" alt="">
				</div>

				<div class="logo-container">
					<img src="" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="testimonials">
		<div class="container">
			<h2><strong>Nos eligieron</strong></h2>
			<h3>Testimonios</h3>

			<div class="swiper-container">
				<div class="swiper-wrapper">

					<!-- add more swiper slides if you need it -->
					<div class="swiper-slide">
						<div class="testimonial_container">
							<p>
								"Lorem ipsum dolor sit amet consectetur
								adipisicing elit. Quas aliquid nihil beatae
								iure veritatis placeat deleniti voluptatem
								deserunt aliquam mollitia perferendis asperiores
								accusantium unde, consectetur tempore quasi,
								hic quibusdam suscipit!"
							</p>
						</div>

						<div class="autor_info_container">
							<strong>Joe Deen</strong>
							<span>Project Manager, Wallmart México</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="typed_text">
		<div class="container">
			<h2>Los líderes no crean crecimieto, los líderes crean las condiciones para el crecimiento</h2>
		</div>
	</div>

	<section class="home_why_us">

		<div class="container">
			<h2>Por qué <strong>elegirnos</strong></h2>
			<p>Somos claros y trabajamos en equipo. Somos realistas y prácticos. Siempre pensamos
				en el usuario primero para que tu negocio ofrezca un verdadero valor
			</p>

			<div class="columns_container">
				<div class="column left_column">
					<div class="row">
						<div class="icon_container">
							<img src="" alt="">
						</div>
						<div class="text_container">
							<p><strong>Mindset</strong> de reto y colaboración</p>
						</div>
					</div>

					<div class="row">
						<div class="icon_container">
							<img src="" alt="">
						</div>
						<div class="text_container">
							<p><strong>Transparencia</strong> y honestidad contigo y con el proyecto</p>
						</div>
					</div>

					<div class="row">
						<div class="icon_container">
							<img src="" alt="">
						</div>
						<div class="text_container">
							<p><strong>Enfoque</strong> en el resultado y el crecimiento</p>
						</div>
					</div>

					<div class="row">
						<div class="icon_container">
							<img src="" alt="">
						</div>
						<div class="text_container">
							<p><strong>Generamos</strong> diseño basado en datos y no en suposiciones</p>
						</div>
					</div>

					<div class="row">
						<div class="icon_container">
							<img src="" alt="">
						</div>
						<div class="text_container">
							<p><strong>Cuestionamos</strong> lo establecido</p>
						</div>
					</div>

				</div>
				<div class="column right_column">
					<div class="img_container">
						<img src="" alt="">
					</div>
					<div class="img_container">
						<img src="" alt="">
					</div>
					<div class="img_container">
						<img src="" alt="">
					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="home_contents">
		<div class="container">
			<h2><strong>Contenidos,</strong>
				insight y más</h2>
			<p>Nos apasiona compartir nuestra experiencia y conocimiento, a través de la creación de contenido de valor</p>

			<div class="blog_entries_container">
				<?php
				/**
				 * Setup query to show the ‘entrys’ post type with ‘4’ posts.
				 * Output the title with an excerpt.
				 */
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 4,
					'orderby' => 'date',
					'order' => 'DESC',
				);

				$loop = new WP_Query($args);

				while ($loop->have_posts()) : $loop->the_post(); ?>
					<div class="entry">
						<?php  /* grab the url for the full size featured image */
						$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
						$post_date = get_the_date('D M j');  ?>

						<div class="img_container">
							<img src="<?php echo $url ?>" alt="">
						</div>

						<div class="entry_information">
							<strong><?php the_title(); ?></strong>
							<span><?php echo $post_date; ?></span>

							<div class="anchor_container">
								<a href="<?php the_permalink(); ?>">Leer más</a>
								<div class="icon">
									<img src="" alt="">
								</div>
							</div>
						</div>

					</div>
				<?PHP endwhile;

				wp_reset_postdata();
				?>
			</div>

		</div>
	</section>

	<section class="home_confidence">
		<div class="container">
			<h2><strong>Confianza y transparencia</strong>
				en todo momento, insights y más</h2>
			<p>Podrás confiar en que entenderemos tu problemática desde la raíz
				identificamos tus retos y desafíos para poder diseñar estrategias y soluciones que permitan crear nuevos productos, mejorar
				la experiencia de tus clientes y transformar la forma en como trabajas.
			</p>

			<div class="row">
				<div class="img_container">
					<img src="" alt="">
				</div>
				<div class="accordeon_container">
					<a href="#" class="togglefaq"><i class="icon-plus"></i> ¿Lorem Ipsum?</a>
					<div class="faqanswer">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa cumque architecto atque? Impedit, deserunt! In modi voluptas mollitia veritatis adipisci nisi tenetur odio, incidunt veniam corporis, nesciunt ex placeat laudantium.
						</p>
					</div>
					<a href="#" class="togglefaq"><i class="icon-plus"></i> ¿Lorem Ipsum?</a>
					<div class="faqanswer">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa cumque architecto atque? Impedit, deserunt! In modi voluptas mollitia veritatis adipisci nisi tenetur odio, incidunt veniam corporis, nesciunt ex placeat laudantium.
						</p>
					</div>
					<a href="#" class="togglefaq"><i class="icon-plus"></i> ¿Lorem Ipsum?</a>
					<div class="faqanswer">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa cumque architecto atque? Impedit, deserunt! In modi voluptas mollitia veritatis adipisci nisi tenetur odio, incidunt veniam corporis, nesciunt ex placeat laudantium.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="animated_text">
		<div class="container">
			<h2>
				<strong>Trasciende los límites de tu industria.</strong>
			</h2>
		</div>
	</div>

	<section class="have_a_proyect">
		<!-- some web browsers lock the autoplay feature -->
		<video class="home_banner_video" autoplay loop muted>
			<!-- modify this if is mp4, webm format is recomended -->
			<source src="ruta-del-video.webm" type="video/mebm">
		</video>

		<div class="container">

			<div class="home_banner_text">

				<h2>¿Tienes un pryecto en la mira?</h2>
				<h3>Iniciemos a colaborar juntos</h3>


				<div class=" anchor_container">
					<a href="#">Hablemos</a>
					<!-- arrow -->
					<img src="" alt="">
				</div>

			</div>
		</div>
	</section>

	<div class="animated_text">
		<div class="container">
			<h2>
				<strong>Trasciende los límites de tu industria.</strong>
			</h2>
		</div>
	</div>

</main><!-- #main -->

<?php
//get_sidebar(); no sider needed
get_footer();
