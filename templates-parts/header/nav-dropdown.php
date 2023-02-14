<div class="search-wrapper">
      <div class="container mobile-wrappper">
          <div class="row cat1">
	            <div class="col-md-3 cls1">
	              		<div>
	              			<div class="start">
	              				<div class="icon-one">
												  <div class="hamburger hamburger-one"></div>
												</div>
											</div>
	              		
	              			<div id="menu">
													<?php wp_nav_menu(array( 'theme_location' => 'menu_principal' )) ?>
											</div>
											
	              		</div>
	                  <span>
	                      <?php echo "CATEGORIES"; ?>
	                  </span>
	            </div>

	            <div class="col-md-9 cls2">
	                   <?php aws_get_search_form( true ); ?>
	            </div>
          </div>
      </div>
</div>