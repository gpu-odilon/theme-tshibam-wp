
<!--  modele template quincaillerie -->
<div class="container mobile-wrappper">

	<ul class="tabs-quincaillerie">
    	<span class="titre-onglet">
    			quincaillerie général
    	</span>
		<li class="tab-link current" data-tab="tab-10">
            <?php echo('Arrivage') ?>    
      </li>
		<li class="tab-link" data-tab="tab-11">
            <?php echo('Promotion') ?>    
      </li>
		<li class="tab-link" data-tab="tab-12">
            <?php echo('Voir tout') ?>    
      </li>
	</ul>

	<div id="tab-10" class="tab-content-quincaillerie current">
		<div class="col-piece" data-aos="fade-up" data-aos-duration="1500">		
			<?php echo do_shortcode('[products limit= "6" columns= "3" short_description="show" order="DESC" category="quincaillerie" ]') ?>
		</div>
	</div>

	<div id="tab-11" class="tab-content-quincaillerie">
		 <div class="col-piece">
         <?php echo do_shortcode('[products limit= "6" columns= "3" orderby= "popularity" short_description="show" category="promo-quincaillerie" class =" quick - sale " on_sale =" true " ]') ?>
      </div>
	</div>

	<div id="tab-12" class="tab-content-quincaillerie">
		 <div class="col-piece">
            <?php echo do_shortcode('[products limit="20" columns ="3" order="ASC" category="promo-quincaillerie,quincaillerie"]') ?>
         </div>
	</div>

</div>