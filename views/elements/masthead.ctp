<div class='masthead_container'>
	<div class='masthead'>
	<?php echo $this->Html->link('O\'Connor\'s Bar Ballycastle', 'http://oconnorsbar.ie', array('class' => 'banner active', 'id' => 'banner1')); ?>
	<?php echo $this->Html->link('O\'Connor\'s Bar Ballycastle', 'http://oconnorsbar.ie', array('class' => 'banner hidden', 'id' => 'banner2')); ?>
	<?php echo $this->Html->link('O\'Connor\'s Bar Ballycastle', 'http://oconnorsbar.ie', array('class' => 'banner hidden', 'id' => 'banner3')); ?>
	<?php echo $this->Html->link('O\'Connor\'s Bar Ballycastle', 'http://oconnorsbar.ie', array('class' => 'banner hidden', 'id' => 'banner4')); ?>
	<?php echo $this->Html->link('O\'Connor\'s Bar Ballycastle', 'http://oconnorsbar.ie', array('class' => 'banner hidden', 'id' => 'banner5')); ?>
	<?php echo $this->Html->link('O\'Connor\'s Bar Ballycastle', 'http://oconnorsbar.ie', array('class' => 'banner hidden', 'id' => 'banner6')); ?>
	</div><!-- masthead -->
</div><!-- masthead_container -->

<?php 
	echo $this->Html->scriptBlock(
		"
		$(document).ready(function() {
			preload([
				'/img/bg_banner_oconnors_bar_ballycastle.jpg',
				'/img/bg_banner_oconnors_bar_ballycastle_2.jpg',
				'/img/bg_banner_oconnors_bar_ballycastle_3.jpg',
				'/img/bg_banner_oconnors_bar_ballycastle_4.jpg',
				'/img/bg_banner_oconnors_bar_ballycastle_5.jpg',
				'/img/bg_banner_oconnors_bar_ballycastle_6.jpg'
			]);
		
			setTimeout('changeBanner(1)', 5000);
		});
		
		/* */
		/* swap the banner image on a rotating loop */
		/* */
		function changeBanner (bannerNumber) {
			var banners = ['banner1', 'banner2', 'banner3', 'banner4', 'banner5', 'banner6'];
			var banner = banners[bannerNumber];
			var activeBanner = $('a.active');
			var newBanner = $('#' + banner);
			
			activeBanner.fadeOut(2000, function() { 
				activeBanner.removeClass('active').addClass('hidden');
				
			});
			newBanner.fadeIn(2000, function() { 
				newBanner.addClass('active').removeClass('hidden');
			});
			
			// DEBUGGING
			// console.log(banners.length + ' ' + bannerNumber);

			if(bannerNumber==(banners.length-1)) {
				bannerNumber = 0;
			} else {
				bannerNumber = bannerNumber + 1;
			}
			setTimeout('changeBanner(' + bannerNumber + ')', 5000);
		}
		
		/* */
		/* pre-load images */
		/* */
		function preload(arrayOfImages) {
			$(arrayOfImages).each(function(){
				$('<img/>')[0].src = this;
				// Alternatively you could use:
				// (new Image()).src = this;
			});
		}
		",
		array('inline' => true)
	);
?>