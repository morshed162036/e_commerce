(function($,window){
    $(document).ready(function(){
        // mobile-menu-show
        $('header .top-header .mobile-menu-openar .bars').click(function(){
              $('.hero-area').hide();
            $('.main-menu').addClass('menu-show');
            $('.menu-overly').addClass('ovshow');
            $('body').css('position','fixed');
            $('.ovshow').click(function(){
                $('.menu-overly').removeClass('ovshow');
                $('.main-menu').removeClass('menu-show');
                $('body').css('position','');
            });
          
        });
        var nav_offset_top = $('header').height() + 50; 
            function navbarFixed(){
         if ( $('.header_area').length ){ 
             $(window).scroll(function() {
                 var scroll = $(window).scrollTop();   
                 if (scroll >= nav_offset_top ) {
                     $(".header_area").addClass("navbar_fixed");
                 } else {
                     $(".header_area").removeClass("navbar_fixed");
                 }
             });
         };
         };
         navbarFixed();
        $('.back').click(function(){
            $('.menu-overly').removeClass('ovshow');
            $('.main-menu').removeClass('menu-show');
            $('body').css('position','');
            $('.hero-area').show();
        })
        $('#filter-open').click(function(){
            $('.side-bar').addClass('sidebar-show');
            $('.menu-overly2').addClass('ovshow');
            $('body').css('position','fixed');
            
            $('.ovshow').click(function(){
                $('.menu-overly2').removeClass('ovshow');
                $('.side-bar').removeClass('sidebar-show');
                $('body').css('position','');

            })
        });
        $('#search-box-open').click(function(){
            $('#advance-search').show();
             $('.navbar_fixed').hide();
            
            $('#advance-search-hide').click(function(){
                $('#advance-search').hide();
                 $('.navbar_fixed').show();
            })
        })
        
        // mobile-category-show
        $('header .main-menu .nav-bar .nav-menus').show();
          $('#cat').click(function(){
              $('header .main-menu .nav-bar .nav-menus').hide();
              $('header .main-menu .nav-bar .header-category-wrap').show();
              $('.main-menu .collpase-menu-open #menu.active').removeClass('active');
              $(this).addClass('active');
          });
            $('#menu').click(function(){
                $('header .main-menu .nav-bar .header-category-wrap').hide();
                $('header .main-menu .nav-bar .nav-menus').show();
                $('.main-menu .collpase-menu-open #cat.active').removeClass('active');
                $(this).addClass('active');
            });

        // product view filter
        $('#list').click(function(){
            $('#grid-view').hide();
            $('#grid').removeClass('active');
            $(this).addClass('active');
            $('#list-view').show();
        });
         $('#grid').click(function(){
            $('#list-view').hide();
            $('#list').removeClass('active');
            $(this).addClass('active');
            $('#grid-view').show();
        });
        // not-home-category-filter
        
        $('.arrow').html('<div style="position: relative;display: inline-block;" class="arrow-in"><i class="icon-right icofont icofont-simple-down" style="display:none"></i><i class="icon-down icofont icofont-simple-right"></i></div>');
        // $('header.not-home .main-menu .nav-bar .header-category-wrap').click(function(){
        //     $('header.not-home .main-menu .nav-bar .header-category-wrap  .header-category-menu').slideToggle();
        //     $('header.not-home .main-menu .nav-bar .header-category-wrap .header-category-nav .icon-down').fadeToggle();
        //     $('header.not-home .main-menu .nav-bar .header-category-wrap .header-category-nav .icon-right').fadeToggle();
        // });
         // submenu arrow-icon-add-auto
         $('ul').parent('li').prepend('<div style="position: absolute;right: 0;top: 10px;color: #666;" class="aroow2 icon-right icofont icofont-simple-right"></div>');

        // submenu
        $('ul li').unbind('click').click(function(e){
            // sub-menu-arrow-icon-change
            if($(this).children('.aroow2').hasClass('icofont-simple-right')){
                $(this).children('.aroow2').removeClass('icofont-simple-right');
                $(this).children('.aroow2').addClass('icofont-simple-down');
            }
            else if($(this).children('.aroow2').hasClass('icofont-simple-down')){
                $(this).children('.aroow2').removeClass('icofont-simple-down');
                $(this).children('.aroow2').addClass('icofont-simple-right');
            }
            // // submenu-dropdown
            // $(this).children('ul').toggle();
            // e.stopPropagation();
            // // e.preventDefault();
        });
        $('ul.mega li.f-li').unbind('click').click(function(e){
            // submenu-dropdown
            if( $('ul.mega li.f-li').children('ul').show()){
                $('ul.mega li.f-li').children('ul').hide();
                $('ul.mega li.f-li').removeClass('active');
            }
            $('.mo-f-category').hide();
            $(this).children('ul').toggle();
            $(this).addClass('active')
            e.stopPropagation();
            // e.preventDefault();
        });
        $('ul.mega li.f-li ul li').unbind('click').click(function(e){
            // submenu-dropdown
            $(this).children('ul').toggle();
            e.stopPropagation();
            // e.preventDefault();
        });
      
        $('.autoplay').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: false,
            responsive:[
                {
                    breakpoint:1000,
                    settings:{
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint:767,
                    settings:{
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint:500,
                    settings:{
                        slidesToShow: 2,
                    }
                },
               
            ]

          });
              $('.footer-item .t1').click(function(){
                winWidth = $(window).width();
                if ( winWidth < 768 ) {
                    $('.footer-item .ic1').slideToggle();
                }
            });
            $('.footer-item .t2').click(function(){
                winWidth = $(window).width();
                if ( winWidth < 768 ) {
                    $('.footer-item .ic2').slideToggle();
                }
            });
            $('.footer-item .t3').click(function(){
                winWidth = $(window).width();
                if ( winWidth < 768 ) {
                    $('.footer-item .ic3').slideToggle();
                }
            });
            $('.footer-item .t4').click(function(){
                winWidth = $(window).width();
                if ( winWidth < 768 ) {
                    $('.footer-item .ic4').slideToggle();
                }
            });
            $('.footer-item .title').click(function(){
                if ( winWidth < 768 ) {
                    if( $(this).children('.footer-sub-icon').children('.icofont').hasClass('icofont-simple-right')){
                        $(this).children('.footer-sub-icon').children('.icofont').removeClass('icofont-simple-right')
                        $(this).children('.footer-sub-icon').children('.icofont').addClass('icofont-simple-down')
                    }
                    else if( $(this).children('.footer-sub-icon').children('.icofont').hasClass('icofont-simple-down')){
                        $(this).children('.footer-sub-icon').children('.icofont').removeClass('icofont-simple-down')
                        $(this).children('.footer-sub-icon').children('.icofont').addClass('icofont-simple-right')
                    }
                }
            });
            $('.submenu').click(function(){
               $(this).children('ul').slideToggle();
            })
            
            $('#someTab').tab('show')

    });
   
})(jQuery, window);