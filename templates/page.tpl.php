
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
	
	<?php if ($page['involved']): ?>
		<div class="opencharity__call_to_action--social">
			<?php print render($page['involved']); ?>
		</div>
	<?php endif; ?>

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
