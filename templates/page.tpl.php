
<div class="opencharity">
	

	<?php if ($page['header']): ?>
		
		<!-- #Header -->
			<header class="opencharity__header">
				
				<?php if ($logo): ?>
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo opencharity__header__logo">
						<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image opencharity__header__logo" />
					</a>
				<?php endif; ?>

				<?php if ($page['navigation']): ?>
					<div class="opencharity__header__nav">
				  		<?php print render($page['navigation']); ?>
					</div>
				<?php endif; ?>

			</header>
		<!-- #Header -->

	<?php endif; ?>


	<div class="opencharity__banner">
			<div class="opencharity__banner__lead_overlay"></div>
			<img src="/home/emeka/Documents/Compucorp/Opencharity/opencharity/assets/image/JBW2PXDOL61.jpg">
			<p class="opencharity__banner__lead_text">Share ideas for charity</p>
			<p class="opencharity__banner__sub_text">Many charities goals are similar, and it is the functionality we require, but little shared work takes place.</p>
			<p class="opencharity__banner__sub_text">By working together, driving shared area of interest and influencing open source development we can bring efficiencies, improve digital experience for our users, and have grate impact.</p>
			<p class="opencharity__banner__sub_text">Together we can make a bigger difference.</p>
	</div>

	
</div>
