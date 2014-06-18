<?php echo View::make('includes/head'); ?>


	<?php echo View::make('includes/sidebar'); ?>

	@yield('body')
	<?php echo View::make('pages/home'); ?>

    
	
<div class="clear"></div>	
<?php echo View::make('includes/footer'); ?>


