<?php 
/*
	Template name: Single product
*/
?>


<?php get_header() ?>
<?php get_template_part( 'templates-parts/header/site-header' ); ?>
<?php get_template_part( 'templates-parts/breadcrumb/nav-breadcrumb' ); ?>

<div class="container-fluid bg-gradiant">
	<div class="container container-filter filter-bg">
		
		<?php get_template_part( 'templates-parts/filtre/filter' ); ?>
		
		<div class="row clswrap">	<!--  fiche produit -->
			<div class="col-md-6" data-aos="fade-right" data-aos-duration="3000">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/prom2.png" class="img-fic">
			</div>
			<div class="col-md-6" data-aos="fade-left" data-aos-duration="3000">
				<div class="contenu-produits">
					<h3>Bridgestone Turanza T 005 - 185/65R15 88T - Pneu Été</h3>
					<span>Marque : Bridgestone</span>
					<div class="titre-description">Description du produit</div>
					<p>Bridgestone TURANZA T005 - 185/65 R15 88T TL - (B/A/70) - Pneus été spécialement développé pour TOURISME & SUV. Pneus été * Classé meilleur de sa catégorie en freinage et adhérence en virage sur chaussée humide par l’organisme indépendant de test et de certification de pneumatiques, TÜV SÜD. Réference : comparaison des performances des 4 principaux concurrents de sa catégorie : Michelin Primacy 4, Continental Premium Contact 5, Good Year Efficient Grip Performance, Pirelli Cinturato P7. Test effectué par TÜV SÜD sur la demande de Bridgestone en juin 2018 à ATP Papenburg sur la dimension de pneu 205/55 R16 91V. Voiture de test : VW Golf7. Rapport n°[713126981]. Les distances de freinage sur sol mouillé sont calculées pour une réduction de vitesse de 80 km/h à 20 km/h. ** Basé sur des tests internes, kilométrage amélioré de 11% par rapport à son prédécesseur, le Bridgestone Turanza T001 EVO.. **Basé sur des tests internes, kilométrage amélioré de 11% par rapport au prédécesseur, le Bridgestone Turanza T001 EVO.</p>
				</div>
			</div>
		</div>
		<div class="row" data-aos="fade-up" data-aos-duration="1500">    <!--  description technique  -->
			<div class="desc-tec">
				<h3><?php echo("Description du  technique") ?></h3>
				<table class="table table-bordered" width="100%">
					<tbody>
				      <tr>
				        <td class="td-bg">Fabricant</td>
				        <td>Bridgestone</td>
				      </tr>
				      <tr>
				        <td class="td-bg">Marque</td>
				        <td>Bridgestone</td>
				      </tr>
				      <tr>
				        <td class="td-bg">Modèle</td>
				        <td>Turanza T 005</td>
				      </tr>
				      <tr>
				        <td class="td-bg">Dimensions du produit (L x l x h)	</td>
				        <td>62.15 x 62.15 x 18.5 cm; 6.82 kilogrammes</td>
				      </tr>
				    </tbody>
				</table>
			</div>
		</div>

		<div class="row wrap-sim-product"> <!-- produit similaires   -->
			<div class="similaire-product" data-aos="fade-left" data-aos-duration="3000">
				<h3><?php echo("produits similaires") ?></h3>
			</div>
		</div>
		<div class="row row-similaire" data-aos="fade-left" data-aos-duration="3000">
			<div class="col-md-3 col-piece">
				<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product ctn-simil">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/similaire-prod1.png" class="img-botom">
						</div>
						<div class="desc-product product-botom">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/similaire-prod1.png" class="product-view">
                    </div> 
				</a>
			</div>
			<div class="col-md-3 col-piece">
				<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product ctn-simil">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/piece1.png" class="img-botom">
						</div>
						<div class="desc-product product-botom">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/piece1.png" class="product-view">
                    </div> 
				</a>
			</div>
			<div class="col-md-3 col-piece">
				<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product ctn-simil">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/similaire-prod3.png" class="img-botom">
						</div>
						<div class="desc-product product-botom">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/similaire-prod3.png" class="product-view">
                    </div> 
				</a>
			</div>
			<div class="col-md-3 col-piece">
				<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product ctn-simil">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/similaire-prod4.png" class="img-botom">
						</div>
						<div class="desc-product product-botom">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/similaire-prod4.png" class="product-view">
                    </div> 
				</a>
			</div>
		</div>
		<div class="row row-similaire" data-aos="fade-left" data-aos-duration="3000">
			<div class="col-md-3 col-piece">
				<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product ctn-simil">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/similaire-prod1.png" class="img-botom">
						</div>
						<div class="desc-product product-botom">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/similaire-prod1.png" class="product-view">
                    </div> 
				</a>
			</div>
			<div class="col-md-3 col-piece">
				<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product ctn-simil">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/piece1.png" class="img-botom">
						</div>
						<div class="desc-product product-botom">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/piece1.png" class="product-view">
                    </div> 
				</a>
			</div>
			<div class="col-md-3 col-piece">
				<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product ctn-simil">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/similaire-prod3.png" class="img-botom">
						</div>
						<div class="desc-product product-botom">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/similaire-prod3.png" class="product-view">
                    </div> 
				</a>
			</div>
			<div class="col-md-3 col-piece">
				<a href="<?php echo site_url('/detail-produit'); ?>">
					<div class="content-product ctn-simil">
						<div class="img-product-cat">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/similaire-prod4.png" class="img-botom">
						</div>
						<div class="desc-product product-botom">
							<h2>Lorem ipsum</h2>
							<p>Lorem ipsum dolod text Lorem ipsum dolod text Lorem ipsum dolod text
							</p>
							<span>Voir plus de détails ></span>
						</div>
					</div>
					<div class="hoverlays">
                         <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/similaire-prod4.png" class="product-view">
                    </div> 
				</a>
			</div>
		</div>
		<div class="all-product">
		<a href="">
			Voir tout les produits
		</a>
	</div>
	<div class="container cnt-liv">
                        <div class="row livraison">
                <div class="col-md-6 col-livs1">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/liv1.png" class="img-liv">
                    <span>livraison sous 48h<br>après commande</span>
                </div>
                <div class="col-md-6 col-livs2">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/liv2.png" class="img-liv">
                    <span>Horaire<br>Lundi - Vendredi : 08:00 - 17:00<br>
                        Samedi : 08:00 - 12:00
                    </span>
                </div>
            </div>
        </div>
	</div>
	
</div>

<?php get_footer() ?>