
// custom jquery

$(document).ready(function(){

    // slick jquery carousel logos
      $('.carousel').slick({
      slidesToShow: 7,
      dots:false,
      vertical: false,
      autoplay: true,
      infinite: true,
      autoplaySpeed: 300,
      });

      //  slick catégorie 
      $('.car-slicker').slick({
      slidesToShow: 5,
      dots:false,
      vertical: false,
      autoplay: true,
      infinite: true,
      autoplaySpeed: 300,
      });

    // slick tabs jquery product-list
      $('ul.tabs li').click(function(){
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
      });

       $('ul.tabs-info li').click(function(){
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs-info li').removeClass('current');
            $('.tab-content-info').removeClass('current');

            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
      });

       $('ul.tabs-mobilier li').click(function(){
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs-mobilier li').removeClass('current');
            $('.tab-content-mobilier').removeClass('current');

            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
      });
});
