
<div class="opencharity">
	
	<?php if ($page['header']): ?>
		
		<!-- #Header -->
			<header class="opencharity__header">
				
				<?php if ($logo): ?>
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo opencharity__header__logo">
						<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image opencharity__header__logo" />
					</a>
				<?php endif; ?>

				<img id="button" src="https://cdn4.iconfinder.com/data/icons/wirecons-free-vector-icons/32/menu-alt-512.png" class="opencharity__header__dropdown-icon">

				<?php if ($page['navigation']): ?>
					<div class="opencharity__header__nav">
				  		<?php print render($page['navigation']); ?>
					</div>
				<?php endif; ?>

			</header>

			<?php if ($page['navigation']): ?>
				<div class="opencharity__header__nav--mobile" id='effect'>
			  		<?php print render($page['navigation']); ?>
				</div>
			<?php endif; ?>

		<!-- #Header -->
	<?php endif; ?>
	
	<?php if ($page['banner']): ?>
		<div class="opencharity__banner">
			<?php print render($page['banner']); ?>
		</div>
	<?php endif; ?>
	

	<!-- #Call to action -->
		<div class="opencharity__call_to_action--event">
			<div class="opencharity__call_to_action--event__event_info">
				<p class="opencharity__call_to_action--event__event_info__time"><span>Next Event: </span>June 23<sup>rd</sup> 2016 18:30 - 21:00</p>
				<p class="opencharity__call_to_action--event__event_info__venue">Cancer Research UK, Angel Building 407 St john Street, London EC1V4AD</p>
			</div>
			<button class="opencharity__call_to_action--event__event_info__register_button">Register</button>		
		</div>
	<!-- #Call to action -->

	<?php if ($page['involved']): ?>
		<div class="opencharity__call_to_action--social">
			<?php print render($page['involved']); ?>
		</div>
	<?php endif; ?>

	<!-- #Info -->
		<div class="opencharity__info--mission-info">
			<p class="opencharity__info--mission-info__lead_text">Our mission</p>
			<p class="opencharity__info--mission-info__sub_text">Charities and partners collaborating and sharing open solutions and ideas to create value to digital space.</p>
			<p class="opencharity__info--mission-info__sub_text">If you have charity or a supplier, we are ready to welcome you.</p>
			
			<div class="opencharity__info--mission-info__col--wrapper">
				<div class="opencharity__info--mission-info__col">
					<div class="opencharity__info--mission-info__col__image--wrapper">
						<img class="opencharity__info--mission-info__col__image opencharity__info--mission-info__col__image--wrapper--bulb" src="assets/image/Bulb.png">
					</div>
					<p class="opencharity__info--mission-info__col__lead_text">We have charities</p>
					<p class="opencharity__info--mission-info__col__sub_text">share knowledge and best practice to make the best technology choice.</p>
				</div>					
			</div>
				
			<div class="opencharity__info--mission-info__col--wrapper">
				<div class="opencharity__info--mission-info__col">
					<div class="opencharity__info--mission-info__col__image--wrapper">
						<img class="opencharity__info--mission-info__col__image" src="assets/image/Iconcopy.png">
					</div>
					<p class="opencharity__info--mission-info__col__lead_text">We bring together</p>
					<p class="opencharity__info--mission-info__col__sub_text">charities and supplies to the charity sector to share bast practices.</p>
				</div>					
			</div>					
			
			<div class="opencharity__info--mission-info__col--wrapper">
				<div class="opencharity__info--mission-info__col">
					<div class="opencharity__info--mission-info__col__image--wrapper">
						<img class="opencharity__info--mission-info__col__image" src="assets/image/Like.png">
					</div>
					<p class="opencharity__info--mission-info__col__lead_text">We encourage</p>
					<p class="opencharity__info--mission-info__col__sub_text">collaboration and innovation for the good of the charity sector.</p>
				</div>
			</div>

			<hr class="opencharity__info--mission-info__bottom_line">
		</div>
	<!-- #Info -->

	<?php if ($page['member']): ?>
		<div class="opencharity__slider--member_slider">
			<?php print render($page['member']); ?>
		</div>
	<?php endif; ?>

	<?php if ($page['blog']): ?>
		<div class="opencharity__slider--blog_slider">
			<?php print render($page['blog']); ?>
		</div>
	<?php endif; ?>

	<?php if ($page['footer']): ?>
		<footer class="opencharity__footer">
			<?php print render($page['footer']); ?>
		</footer>
	<?php endif; ?>
	
</div>
