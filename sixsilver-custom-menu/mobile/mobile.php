<?php 
if(wp_is_mobile())
{ 
    if(!is_page(30415))add_filter('wc_facebook_is_messenger_enabled', 'no');
    // wp_enqueue_style( 'Mobile-menu-stylesheet', plugin_dir_url( __DIR__ ).'mobile/mobile_style.css' );
    include_once('mobile_style.php');
    ?>

    <div id="six_top_bar">
        <div class="six_top_bar_inner_wrapper">
            <a href="<?php echo get_home_url(); ?>">
                <img src="https://nowystaging.sixsilver.pl/wp-content/uploads/2021/09/sixsilver-jubiler-logo.png" alt="SIXSILVER JUBILER">
            </a>
        </div>
        <div class="six_top_bar_inner_wrapper right">
            <!-- <div class="six_top_bar_wishlist_wrapper">
                <a href="https://nowystaging.sixsilver.pl/?page_id=26863&preview=true"><img <?php 
                if(!is_page(26863))echo 'src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-topbar-wishlista.svg"';
                    else echo 'src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-topbar-wishlista-active.svg"';
                    ?> alt="Lista życzeń"></a>
            </div> -->
            <div class="six_top_bar_account_wrapper">
                <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><span><?php
                if(is_user_logged_in()) 
                {
                    $current_user = wp_get_current_user();
                    echo $current_user->user_firstname[0].$current_user->user_lastname[0];
                }
                else echo '<img src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-account.svg" alt="Moje konto">';
                ?></span></a>
            </div>
        </div>
    </div>

    <div id="six_tap_bar">
        <div class="six_tap_bar_inner">
            <div class="six_tap_bar_icon_wrapper">
                <a href="<?php echo get_home_url(); ?>">
                    <?php
                    if(is_front_page())
                    {
                    ?>
                        <img src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-home-active.svg" alt="">
                        <p style="text-align:center;color: #FEC4C7;">Home</p>
                    <?php 
                    }
                    else
                    {
                    ?>
                        <img src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-home.svg" alt="">
                        <p style="text-align:center;">Home</p>
                    <?php
                    }
                    ?>
                </a>
            </div>
            <div class="six_tap_bar_icon_wrapper search">
                <img src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-lupa.svg" alt="">
                <p style="text-align:center;">Szukaj</p>
            </div>
            <div class="six_tap_bar_icon_wrapper center nav-menu">
                <div class="six_tap_bar_icon_inner_wrapper">
                    <img src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-kategorie.svg" alt="">
                </div>
                <p style="text-align:center;position: relative;top: 16px;width: 56px;text-align: center;display: block;width: 100%;">Menu</p>
            </div>
            <div class="six_tap_bar_icon_wrapper cart">
                <img src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-koszyk.svg" alt="">
                <p style="text-align:center;">Koszyk</p>
            </div>
            <div class="six_tap_bar_icon_wrapper">
                <a href="https://nowystaging.sixsilver.pl/?page_id=30415&preview=true">
                    <?php
                        if(is_page(30415))
                        {
                        ?>
                            <img src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-telefon-active.svg" alt="">
                            <p style="text-align:center;color: #FEC4C7;">Kontakt</p>
                        <?php 
                        }
                        else
                        {
                        ?>
                            <img src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-telefon.svg" alt="">
                            <p style="text-align:center;">Kontakt</p>
                        <?php
                        }
                    ?>
                </a>
                
            </div>
        </div>
    </div>

    <div class="six_search_popup">
        <div class="six_search_popup_inner_wrapper">
            <img class="six_search_popup_close" style="float:right; width: 24px;height: 24px;cursor: pointer;" src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-xmark.svg" alt="Zamknij">
            <h2 style="text-align: center; font-size: 24px;margin: 15px auto 20px auto;">Wyszukaj produkt</h2>
            <?php echo do_shortcode('[fibosearch]'); ?>
        </div>
    </div>

    <div class="six_cart_popup">
        <div class="six_cart_popup_inner_wrapper">
            <img class="six_cart_popup_close" style="float:right; width: 24px;height: 24px;cursor: pointer;" src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-xmark.svg" alt="Zamknij">
            <h2 style="text-align: center; font-size: 24px;margin: 15px auto 20px auto;width: max-content;">Koszyk</h2>
        </div>
    </div>

    <div class="six_nav_popup">
        <div class="six_nav_popup_inner_wrapper">
            <img class="six_nav_popup_close" style="float:right; width: 24px;height: 24px;cursor: pointer;" src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-xmark.svg" alt="Zamknij">
            <h2 style="text-align: center; font-size: 24px;margin: 15px auto 20px auto;">Menu</h2>
            <?php
                wp_nav_menu( array(
                    'menu'              => 1107,
                    'menu_id'           => "six_mobile_nav",
                    'depth'             => 3,
                ));
            ?>
        </div>
    </div>
    <?php echo do_shortcode('[xoo_wsc_cart]'); ?>
    <script>

        jQuery('#six_mobile_nav .menu-item').find('.sub-menu').parent('.menu-item').append('<div class="six_menu_toggle_icon_wrapper"><img src="https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-chevron-down.svg" alt=""></div>');

        jQuery('#six_mobile_nav .menu-item > .sub-menu').ready().css('display', 'none');

        jQuery('#six_mobile_nav .menu-item > a').click(function(){
            if(jQuery(this).siblings('.sub-menu').hasClass('active'))
            {
                jQuery(this).siblings('.six_menu_toggle_icon_wrapper').animate(
                { deg: 0 },
                {
                    duration: 300,
                    step: function(now) {
                    jQuery(this).css({ transform: 'rotate(' + now + 'deg)' });
                    }
                }
                );
                jQuery(this).siblings('.sub-menu').removeClass('active');
            }
            else
            {
                jQuery(this).siblings('.six_menu_toggle_icon_wrapper').animate(
                { deg: 180 },
                {
                    duration: 300,
                    step: function(now) {
                    jQuery(this).css({ transform: 'rotate(' + now + 'deg)' });
                    }
                }
                );
                jQuery(this).siblings('.sub-menu').addClass('active');
            }
            if(jQuery(this).siblings('.sub-menu').length > 0)
                jQuery(this).siblings('.sub-menu').stop().slideToggle( "slow" );
        });

        jQuery('#six_mobile_nav .menu-item > .six_menu_toggle_icon_wrapper').click(function(){
            if(jQuery(this).siblings('.sub-menu').hasClass('active'))
            {
                jQuery(this).animate(
                { deg: 0 },
                {
                    duration: 300,
                    step: function(now) {
                    jQuery(this).css({ transform: 'rotate(' + now + 'deg)' });
                    }
                }
                );
                jQuery(this).siblings('.sub-menu').removeClass('active');
            }
            else
            {
                jQuery(this).animate(
                { deg: 180 },
                {
                    duration: 300,
                    step: function(now) {
                    jQuery(this).css({ transform: 'rotate(' + now + 'deg)' });
                    }
                }
                );
                jQuery(this).siblings('.sub-menu').addClass('active');
            }
            if(jQuery(this).siblings('.sub-menu').length > 0)
                jQuery(this).siblings('.sub-menu').stop().slideToggle( "slow" );
        });

        jQuery('#six_mobile_nav .sub-menu').siblings('a').removeAttr('href')

        function hideSearchPopup()
        {
            jQuery('.six_search_popup').stop().fadeOut(400);
            jQuery('html').removeClass('disable_scroll');
            jQuery('.six_search_popup').removeClass('active');
            jQuery('.six_tap_bar_icon_wrapper.search > img').attr('src', 'https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-lupa.svg');
            jQuery('.six_tap_bar_icon_wrapper.search > p').css('color', '#B9BCBE');
        }

        function hideNavPopup()
        {
            jQuery('.six_nav_popup').stop().fadeOut(400);
            jQuery('html').removeClass('disable_scroll');
            jQuery('.six_nav_popup').removeClass('active');
            jQuery('.six_tap_bar_icon_wrapper.nav-menu > div > img').attr('src', 'https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-kategorie.svg');
            jQuery('.six_tap_bar_icon_wrapper.nav-menu > p').css('color', '#B9BCBE');
        }

        function hideCartPopup()
        {
            jQuery('.six_cart_popup').removeClass('active');
            jQuery('.six_cart_popup').stop().fadeOut(400);
            jQuery('html').removeClass('disable_scroll');
            jQuery('.six_tap_bar_icon_wrapper.cart > img').attr('src', 'https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-koszyk.svg');
            jQuery('.six_tap_bar_icon_wrapper.cart > p').css('color', '#B9BCBE');
        }

        function showCartPopup()
        {
            jQuery('.six_cart_popup').delay(100).addClass('active');
            jQuery('.six_cart_popup').stop().delay(100).fadeIn(400);
            jQuery('html').addClass('disable_scroll').delay(100);
            jQuery('.six_tap_bar_icon_wrapper.cart > img').delay(100).attr('src', 'https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-koszyk-active.svg');
            jQuery('.six_tap_bar_icon_wrapper.cart > p').delay(100).css('color', '#FEC4C7');
        }

        jQuery('.six_cart_popup_inner_wrapper, .xoo-wsc-modal').ready(function(){
            jQuery('.xoo-wsc-modal').appendTo('.six_cart_popup_inner_wrapper');
            jQuery('.xoo-wsc-sc-cont').appendTo('.six_tap_bar_icon_wrapper.cart');
        });

        jQuery('.six_tap_bar_icon_wrapper.cart').click(function(){
        if(jQuery('.six_cart_popup').hasClass('active'))
        {
            hideCartPopup();
        }
        else
        {
            if(jQuery('.six_search_popup').hasClass('active'))
            {
                hideSearchPopup();
            }

            if(jQuery('.six_nav_popup').hasClass('active'))
            {
                hideNavPopup();
            }

            showCartPopup();
        }
        });

        jQuery( document ).on( 'click', '.single_add_to_cart_button', function() 
        {
            showCartPopup();
        });

        jQuery('.six_cart_popup_close').click(function(){
            hideCartPopup();
        });
        


        jQuery('.six_tap_bar_icon_wrapper.search').click(function(){
            if(jQuery('.six_search_popup').hasClass('active'))
            {
                hideSearchPopup();
            }
            else
            {
                if(jQuery('.six_cart_popup').hasClass('active'))
                {
                    hideCartPopup();
                }

                if(jQuery('.six_nav_popup').hasClass('active'))
                {
                    hideNavPopup();
                }

                jQuery('.six_search_popup').stop().fadeIn(400);
                jQuery('html').addClass('disable_scroll');
                jQuery('.six_search_popup').addClass('active');
                jQuery('.six_tap_bar_icon_wrapper.search > img').attr('src', 'https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-lupa-active.svg');
                jQuery('.six_tap_bar_icon_wrapper.search > p').css('color', '#FEC4C7');
            }
        });

        jQuery('.six_search_popup_close').click(function(){
            hideSearchPopup();
        });

        jQuery('.six_tap_bar_icon_wrapper.nav-menu').click(function(){
            if(jQuery('.six_nav_popup').hasClass('active'))
            {
                hideNavPopup();
            }
            else
            {
                if(jQuery('.six_cart_popup').hasClass('active'))
                {
                    hideCartPopup();
                }
                if(jQuery('.six_search_popup').hasClass('active'))
                {
                    hideSearchPopup();
                }
                jQuery('.six_nav_popup').stop().fadeIn(400);
                jQuery('html').addClass('disable_scroll');
                jQuery('.six_nav_popup').addClass('active');
                jQuery('.six_tap_bar_icon_wrapper.nav-menu > div > img').attr('src', 'https://nowystaging.sixsilver.pl/wp-content/uploads/2022/06/sixsilver-jubiler-menu-xmark.svg');
                jQuery('.six_tap_bar_icon_wrapper.nav-menu > p').css('color', '#FEC4C7');
            }
        });

        jQuery('.six_nav_popup_close').click(function(){
            hideNavPopup();
        });

        jQuery('.six_search_popup.active, .six_cart_popup.active, .six_nav_popup.active').click(function(){
        var container1 = jQuery(".six_search_popup");
        var container2 = jQuery(".six_cart_popup");
        var container3 = jQuery(".six_nav_popup");

            jQuery('.six_search_popup.active, .six_cart_popup.active, .six_nav_popup.active').click(function(){
                if (!container1.is(event.target) && !container1.has(event.target).length) alert('container1');
                else if (!container2.is(event.target) && !container2.has(event.target).length) alert('container2');
                else if (!container3.is(event.target) && !container3.has(event.target).length) alert('container3');
            });
        
        });

        jQuery( document ).on( 'click', '.six_search_popup.active', function() 
        {
            hideSearchPopup();
        });

        var tempScrollY = 0;
        jQuery(window).scroll(function(){
            
            var currentScrollPos = jQuery(this).scrollTop();
            
            if(currentScrollPos > 300)
            {
                if ( currentScrollPos > tempScrollY ) 
                {
                    jQuery('#six_tap_bar').css('bottom', '-100px');
                    tempScrollY = currentScrollPos;
                }
                else if ( currentScrollPos < tempScrollY )
                {
                    jQuery('#six_tap_bar').css('bottom', '0');
                    tempScrollY = currentScrollPos;
                }
            }
        });

    </script>
    <?php
}