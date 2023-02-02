 

<!--  Modele template page informatique-->
<div class="container clsinformatic mobile-wrappper">

	<ul class="tabs-info">
    	<span class="titre-onglet">
    			Informatique
    	</span>
		<li class="tab-link current" data-tab="tab-4">Arrivage</li>
		<li class="tab-link" data-tab="tab-5">Promotion</li>
		<li class="tab-link" data-tab="tab-6">Voir tout</li>
	</ul>

	<div id="tab-4" class="tab-content-info current">

		<div class="col-piece" data-aos="zoom-in" data-aos-duration="1500">
			<?php echo do_shortcode('[products limit= "12" columns= "3" short_description="show" order="DESC" category="informatique" ]') ?>
		</div>
		
	</div>

	<div id="tab-5" class="tab-content-info">
		<div class="col-piece">
         <?php echo do_shortcode('[products limit= "12" columns= "3" orderby= "popularity" short_description="show" category="promo-info" class =" quick - sale " on_sale =" true " ]') ?>
      </div>
	</div>

	<div id="tab-6" class="tab-content-info">
		 <div class="col-piece">
            <?php echo do_shortcode('[products limit="20" columns ="3" order="ASC" category="promo-info,informatique"]') ?>
         </div>
	</div>

</div>


