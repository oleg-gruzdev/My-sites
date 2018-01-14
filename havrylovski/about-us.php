<?php
/**
 * 
 *Template Name: about-us
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package havrylovski
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

	<!--ABOUT US-->
	<section>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</section>
	<div class="about-us">
		<div class="container-fluid group">

			<h1 class='title-text title-text1 about-us-title'>про <span>нас</span></h1>
			<p class='description-text'>Наші проекти враховують все: від дрібниць до важливих моментів, від ваших побажань до межі можливостей матеріалів і технологій. У кожному проекті відображена наша любов до своєї справи і гаряче бажання втілити вашу саму сміливу мрію про неповторному і затишному інтер'єрі.</p>
			<p class='description-text description-text1'>Від найпершої зустрічі з клієнтом і до завершення всіх робіт ми не тільки продумаємо всі нюанси і їх виконання, а й подбаємо про те, щоб яскравий і стильний дизайн квартир приніс вам радість. При створенні проекту і при його візуалізації ми врахуємо всі ваші побажання і створимо унікальний інтер'єр.</p>

			<div class="who-we-are group">
				<div class='logo-box-big our-photo-box'>
					
								<img src="<?php echo get_template_directory_uri(); ?>/images/about-us.png" alt="about-us">
							
				</div>
				<div class='about-us-text who-we-are-text'>
					<h1 class='title-text title-text1 who-we-are-title'>хто <span>ми?</span></h1>
					<p class='description-text'><span class="bold">Гавриловська Оксана</span> - магістр архітектури, в  1999 році закінчила архітектурний факультет Киівського Національного Університету Будівництва і Архітектури.
					<p class='description-text description-text1'><span class="bold">Гавриловський Микола</span> - з відзнакою закінчив Киівський Національний Університет Будівництва і Архітектури в 1998 році за спеціальністю "Архітектура будівель і споруд".</p>
					<h1 class='title-text title-text1 our-contacts-title'>наші контакти</h1>
					<p class="description-text contacts-text">+380 (067) 233 55 31  <span class="bold">|</span>  <span class="bold">Оксана</span></p>
					<p class="description-text contacts-text">+380 (098) 118 05 90  <span class="bold">|</span>  <span class="bold">Микола</span></p>
				</div>
			</div>
			

			<div class="why-we-block group">
				<div class='logo-box-big why-we-box'>
					
								<img src="<?php echo get_template_directory_uri(); ?>/images/why-we.png" alt="why-we">
							
				</div>
				<div class='why-we-text'>
					<h1 class='title-text title-text1 why-we-title'>чому <span>ми?</span></h1>
					<p class='description-text'>Наші проекти враховують все: від дрібниць до важливих моментів, від ваших побажань до межі можливостей матеріалів і технологій. У кожному проекті відображена наша любов до своєї справи і гаряче бажання втілити вашу саму сміливу мрію про неповторному і затишному інтер'єрі.</p>
					<p class='description-text description-text1'>Від найпершої зустрічі з клієнтом і до завершення всіх робіт ми не тільки продумаємо всі нюанси і їх виконання, а й подбаємо про те, щоб яскравий і стильний дизайн квартир приніс вам радість. При створенні проекту і при його візуалізації ми врахуємо всі ваші побажання і створимо унікальний інтер'єр.</p>
				</div>
			</div>


		</div>
	</div>
	<!--ABOUT US END-->

<!--ACH BLOCK-->
	<div class="our-achievements-block">
		<div class="container-fluid">
			<div class="our-achievements-row">
			<div class='parent'>
				<div class="ach-text">
					<h1 class="title-text title-text2">наші <span>досягнення</span></h1>
					<p class="description-text description-text2">За майже двадцятирічний творчий період створені і здійснені десятки проектів приватних житлових будинків та інтер'єрів будинків, квартир і приміщень громадського призначення (ресторанів, кафе та офісів), а також малих архітектурних форм. У нашому списку реконструкція житлових будинків та проекти реконструкції історичних будівель. Великий досвід в проектуванні серійної і індивідуальних меблів і елементів декору для офісів та житла.</p>
				</div></div>
				<div class="ach-item">
					<span class="number">150</span>
					<p class="text">задоволених клієнтів</p>
				</div>
				<div class="ach-item">
					<span class="number">450</span>
					<p class="text">завершених проектів</p>
				</div>
				<div class="ach-item">
					<span class="number">12</span>
					<p class="text">років успішної роботи</p>
				</div>
				<div class="ach-item">
					<span class="number">25</span>
					<p class="text">постійних клієнтів</p>
				</div>
			</div>
		</div>

	</div>
<!--ACH BLOCK END-->

<!--OUR CONTACTS-->
	<div class="our-contacts-block">
		<div class="container-fluid">
			<h1 class='title-text title-text1'>зв’яжіться <span>з нами</span></h1>
			<div class="our-contacts-row">
				<div class="our-contact-item our-address-item">
					<p class="contact-title">Адреса</p>
					<p class="content content-text our-address">місто Київ,  вулиця Чайковського , 21-А</p>
				</div>
				<div class="our-contact-item our-tel-item">
					<p class="contact-title">Телефон</p>
					<p class="content content-text our-tel">+38 (096) 704-11-82</p>
					<p class="content">+38 (096) 704-11-83</p>
				</div>
				<div class="our-contact-item our-email-item">
					<p class="contact-title">Email</p>
					<p class="content content-text our-email"><a href="#" mailto='havrylovskyi@gmail.com'>havrylovskyi@gmail.com</a></p>
				</div>
				<div class="our-contact-item we-are-in-sl">
					<p class="contact-title">Соцмережі</p>
					<p class="content sosial">
						<a href="https://www.facebook.com/Gavrylovski" class="social-link fb"></a>
						<a href="https://www.instagram.com/Havrylovski" class="social-link in"></a>
						<a href="https://www.behance.net/Gavrylovski" class="social-link be"></a>
					</p>
				</div>
			</div>
		</div>
	</div>
<!--OUR CONTACTS END-->



	</main><!-- #main -->
	</div><!-- #primary -->
	<?php
//get_sidebar();
get_footer();
  