
<?php 

 ?>
 <!--  Modele template page piece de rechange -->
<div class="container mobile-wrappper">
   <ul class="tabs" data-aos="zoom-in" data-aos-duration="1500">
      <span class="titre-onglet">
      Pièces de rechange pour matériel roulant
      </span>
      <li class="tab-link current" data-tab="tab-1">Arrivage</li>
      <li class="tab-link" data-tab="tab-2">Promotion</li>
      <li class="tab-link" data-tab="tab-3">Voir tout</li>
   </ul>
   <div id="tab-1" class="tab-content current">
         <div class="col-piece" data-aos="zoom-in" data-aos-duration="1500">
            <?php echo do_shortcode('[products limit= "12" columns= "3" short_description="show" order="DESC" category="pieces" ]') ?>
         </div>
   </div>
   <div id="tab-2" class="tab-content">
         <div class="col-piece" data-aos="zoom-in" data-aos-duration="1500">
            <?php echo do_shortcode('[products limit= "12" columns= "3" orderby= "popularity" short_description="show" category="promo-piece" class =" quick - sale " on_sale =" true " ]') ?>
      </div>
   </div>
   <div id="tab-3" class="tab-content">
      <div class="col-piece" data-aos="zoom-in" data-aos-duration="1500">
         <?php echo do_shortcode('[products limit="20" columns ="3" order="ASC" category="promo-piece,pieces"]') ?>
      </div>
   </div>
</div>




