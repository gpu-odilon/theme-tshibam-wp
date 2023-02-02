
<!--  modele template mobilier du bureau -->
<div class="container mobile-wrappper">

	<ul class="tabs-mobilier">
    	<span class="titre-onglet">
    			Mobilier de bureau
    	</span>
		<li class="tab-link current" data-tab="tab-7">Arrivage</li>
		<li class="tab-link" data-tab="tab-8">Promotion</li>
		<li class="tab-link" data-tab="tab-9">Voir tout</li>
	</ul>

	<div id="tab-7" class="tab-content-mobilier current">
		<div class="col-piece" data-aos="zoom-in" data-aos-duration="1500">
			<?php echo do_shortcode('[products limit= "12" columns= "3" short_description="show" order="DESC" category="mobilier" ]') ?>
		</div>	
	</div>

	<div id="tab-8" class="tab-content-mobilier">
		 <div class="col-piece">
			<?php echo do_shortcode('[products limit= "12" columns= "3" orderby= "popularity" short_description="show" category="promo-mobilier" class =" quick - sale " on_sale =" true " ]') ?>
		</div>
	</div>

	<div id="tab-9" class="tab-content-mobilier">
		 <div class="col-piece">
			<?php echo do_shortcode('[products limit= "12" columns= "3" short_description="show" order="ASC" category="mobilier,promo-mobilier" ]') ?>
		</div>			
			
		</div>
</div>