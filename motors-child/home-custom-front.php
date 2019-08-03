<?php
/**
 * Template Name: Home Custom Layout
 *
 * @package WordPress
 * @subpackage motors
 * @since Motors 1.2
 */
 
?>
<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div class="container">
			<?php the_content(); ?>
		</div>
<?php endwhile; endif; ?>
<div class="booking-system">
	<div class="container">
		<div class="row booking-first">
	    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 border1">
	        <div class="imgwrapper text-center">
	            <a href="/bike-bookings" class="text-center"><img src="/wp-content/uploads/2019/07/Bike-Booking-1.png" class="img-fluid" alt="Bike-Booking"/></a></div>   
	    </div>
	    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 border2">
	        <div class="imgwrapper text-center">
	            <a href="/engine-oil" class="text-center"><img src="/wp-content/uploads/2019/07/Engine-Oils.png" class="img-fluid" alt="SpeedonX Order Engine Oil Icon"/></a>  
	        </div>   
	    </div>
	    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 border3">
	        <div class="imgwrapper text-center">
	            <a href="//newsroom.speedonx.com" class="text-center"><img src="/wp-content/uploads/2019/07/Newsroom2.png" class="img-fluid" alt="SpeedonX Newsroom Icon"/></a>  
	        </div>   
	    </div>
	    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 border4">
	        <div class="imgwrapper text-center">
	            <a href="/contact-us" class="text-center"><img src="/wp-content/uploads/2019/07/Contact.png" class="img-fluid" alt="Contact-us"/></a>  
	        </div>   
	    </div>

	  </div> 
	</div>
</div>	

<?php get_footer(); ?>