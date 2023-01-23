<?php 
/*
    Template name: footer
*/
 ?>

<footer>
    <div class="container-fluid fluid-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4 top-logo">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-footer.png" alt="logo-footer" class="footer-logo">
                    </a>
                    <p>Commercialisation de pièces détachées poids lourds, 
engins et auto|moto, quincaillerie générale, 
matériels informatique, téléphone mobile, 
mobilier de bureau et fourniture de bureau</p>
                    <h3>Suivez-nous</h3>
                   <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/fb.png" alt="" class="sociaux">
                   </a>
                   <a href="#">
                       <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/linkedin.png" alt="" class="sociaux">
                   </a>
                    
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 footer-col">
                    <h3>Contact</h3>
                    <div class="number">
                        <span>034 05 815 11</span>
                        <span>034 05 815 11</span>
                    </div>
                    <div class="mail">
                        <span>commercial@tshibam.mg</span>
                        <span>commercialbi@tshibam.mg</span>
                        <span>direction@tshibam.mg</span>
                    </div>
                    <div class="adresse">
                        <span>Tanjombato ZI Forello,</span>
                        <span>Enceinte Afriport B2</span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 footer-col">
                    <h3>Catégories</h3>
                    <div class="categorie">
                        <ul>
                            <li>
                                <a href="<?php echo site_url('/piece-de-rechange'); ?>">Pièces de rechange pour matériel roulant</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/produit-informatique'); ?>">
                                    Informatique
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/mobilier-du-bureau'); ?>">
                                    Mobilier de bureau
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/quincaillerie-generale'); ?>">
                                    Quincaillerie
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid footer-copyright">
                <p>
                    <?php echo "Copyright © 2023 by Dekale. All Rights Reserved."; ?>
                </p>
        </div>
        
        

</footer>
        
        <?php wp_footer() ?>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>AOS.init();</script>
   </body>
</html>