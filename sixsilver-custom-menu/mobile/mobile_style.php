<style>
    body{margin-bottom: 90px;}

    .masthead{display: none !important;}

    html.disable_scroll 
    {
        height: calc(100vh - 90px);
        overflow: hidden;
    }

    #six_tap_bar
    {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 999999999;
        height: 80px;
        width: 100%;
        background-color: #FFF;
        border-radius: 10px 10px 0 0;
        box-shadow: 0px -2px 5px 0px rgba(186, 186, 186, 0.15);
        padding-bottom: 8px;
        transition: all 0.4s ease-in-out 0s;
    }

    #six_tap_bar .six_tap_bar_inner
    {
        display: flex;
        justify-content: center;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }

    #six_tap_bar > .six_tap_bar_inner > .six_tap_bar_icon_wrapper
    {
        display: flex;
        justify-content: center;
        flex-direction: column;
        margin: auto;
        width: calc(100% / 5);
        
    }

    #six_tap_bar > .six_tap_bar_inner > .six_tap_bar_icon_wrapper > .six_tap_bar_icon_inner_wrapper
    {
        border-radius: 50%;
        display: flex;
        padding: 13px;
        background-color: #FEC4C7;
        width: 56px;
        height: 56px;
    }

    #six_tap_bar > .six_tap_bar_inner > .six_tap_bar_icon_wrapper.center > .six_tap_bar_icon_inner_wrapper
    {
        position: absolute;
        top: -28px;
        left: 50%;
        transform: translateX(-50%);
        box-shadow: 2px 2px 2px 0px #6868681A;
    }

    #six_tap_bar > .six_tap_bar_inner > .six_tap_bar_icon_wrapper.center > .six_tap_bar_icon_inner_wrapper > img
    {
        width: 30px;
        height: 30px;
        filter: brightness(200%);
        margin: auto;
    }

    #six_tap_bar > .six_tap_bar_inner > .six_tap_bar_icon_wrapper img
    {
        max-width: 24px;
        height: auto;
        margin: 3px auto;
    }

    #six_tap_bar > .six_tap_bar_inner > .six_tap_bar_icon_wrapper > a img
    {
        position: relative;
        left: 50%;
        transform: translateX(-50%);
    }

    #six_tap_bar > .six_tap_bar_inner > .six_tap_bar_icon_wrapper > p,
    #six_tap_bar > .six_tap_bar_inner > .six_tap_bar_icon_wrapper > a 
    {
        font-size: 12px;
        color: #B9BCBE;
        margin: 0;
    }

    #six_tap_bar > .six_tap_bar_inner > .six_tap_bar_icon_wrapper > a p
    {
        margin: 0;
    }

    #six_top_bar
    {
        height: 68px;
        width: 100%;
        background-color: #FFF;
        border-radius: 0 0 10px 10px;
        box-shadow: 0px 2px 5px 0px rgba(186, 186, 186, 0.15);
        display: flex;
        justify-content: space-between;
        margin-bottom: 6px;
        position: relative;
        z-index: 9;
    }

    #six_top_bar > .six_top_bar_inner_wrapper
    {
        position: relative;
        max-width: 50%;
    }

    #six_top_bar > .six_top_bar_inner_wrapper > a
    {
        display: block;
        position: relative;
        top: 50%;
        left: 20px;
        transform: translateY(-50%);
    }

    #six_top_bar > .six_top_bar_inner_wrapper.right
    {
        display: flex;
        justify-content: flex-end;
        flex-direction: row;
    }

    #six_top_bar > .six_top_bar_inner_wrapper.right > div
    {
        margin: 0 10px;
        height: max-content;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        padding: 0 2px;
        border-radius: 50%;
    }

    #six_top_bar > .six_top_bar_inner_wrapper.right > .six_top_bar_account_wrapper
    {
        background-color: #FEC4C7;
        margin-right: 15px;
        box-shadow: 2px 2px 2px 0px #6868681A;
    }

    #six_top_bar > .six_top_bar_inner_wrapper.right > .six_top_bar_account_wrapper > a
    {
        padding: 0 3px;
        position: relative;
        top: 1px;
        color: #FFFFFF;
        font-size: 12px;
    }

    #six_top_bar > .six_top_bar_inner_wrapper.right > .six_top_bar_account_wrapper > a img
    {
        width: 15px;
        height: 15px;
        filter: brightness(200%);
        position: relative;
        top: -1px;
    }

    #six_top_bar > .six_top_bar_inner_wrapper.right .six_top_bar_wishlist_wrapper img
    {
        width: 22px;
        height: auto;
    }

    #six_top_bar > .six_top_bar_inner_wrapper > img
    {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        padding: 5px 0 5px 20px;
    }

    .six_tap_bar_icon_wrapper.cart
    {
        position: relative;
    }

    .six_tap_bar_icon_wrapper,
    .six_menu_toggle_icon_wrapper
    {
        cursor: pointer;
    }

    .six_search_popup
    {
        width: 100vw;
        height: calc(100vh - 70px);
        padding: 20px !important;
        position: fixed;
        padding: 20px;
        top: 0;
        left: 0;
        z-index: 99999;
        background-color: rgb( 148 148 148 / 85%);
        display: none;
    }

    .six_search_popup > .six_search_popup_inner_wrapper
    {
        width: 100%;
        border-radius: 8px;
        background-color: #FFFFFF;
        padding: 25px;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }

    .six_nav_popup
    {
        width: 100vw;
        height: calc(100vh - 70px);
        padding: 20px;
        position: fixed;
        padding: 20px !important;
        top: 0;
        left: 0;
        z-index: 99999;
        background-color: rgb( 148 148 148 / 85%);
        display: none;
    }

    .six_nav_popup > .six_nav_popup_inner_wrapper
    {
        width: 100%;
        height: 100%;
        background-color: #FFFFFF;
        border-radius: 8px;
        position: relative;
        padding: 20px;
        overflow-y: auto;
    }

    #six_mobile_nav 
    {
        list-style: none;
        margin: 25px 0;
    }

    #six_mobile_nav .menu-item
    {
        position: relative;
    }

    #six_mobile_nav .menu-item > a
    {
        color: #262626;
        width: calc(100% - 30px);
        margin: 5px auto !important;
        cursor: pointer;
    }

    #six_mobile_nav > .menu-item > a
    {
        display: block;
        padding: 10px;
        background-color: #dadada;
        border-radius: 8px;
        font-size: 16px;
    }

    #six_mobile_nav > .menu-item li
    {
        list-style: none;
    }

    #six_mobile_nav .sub-menu
    {
        margin: 0 0 0 10px;
        /* height: 0; */
        overflow: hidden;
    }

    #six_mobile_nav > .menu-item .menu-item > a
    {
        font-size: 15px;
        padding: 5px 10px 5px 0;
        display: block;
        padding-top: 0.75em;
        padding-right: 1.25em;
        padding-bottom: 0.75em;
        padding-left: 1.25em;
    }

    #six_mobile_nav > .menu-item > .sub-menu > .menu-item > a
    {
        background-color: #26262612;
        border-radius: 8px;
        margin: 4px 0;
    }

    #six_mobile_nav > .menu-item > .sub-menu > .menu-item > .sub-menu > .menu-item > a
    {
        background-color: #26262607;
        border-radius: 8px;
        margin: 4px 0;
    }

    #six_mobile_nav .six_menu_toggle_icon_wrapper
    {
        position: absolute;
        right: 25px;
        top: 4px;
        width: 35px;
        height: auto;
        padding: 8px;
    }

    .six_cart_popup
    {
        width: 100vw;
        height: calc(100vh - 70px);
        padding: 20px !important;
        position: fixed;
        padding: 20px;
        top: 0;
        left: 0;
        z-index: 99999;
        background-color: rgb( 148 148 148 / 85%);
        display: none;
    }

    .six_cart_popup_inner_wrapper
    {
        left: 50% !important;
        transform: translateX(-50%);
        height: calc(100% - 130px) !important;
        width: calc(100% - 30px) !important;
        border-radius: 8px !important;
        padding: 20px !important;
        position: fixed;
        margin: 20px 0;
        background-color: #FFF;
        overflow-y: auto;
    }

    .six-xoo-wsc-modal
    {
        margin-bottom: 15px;
    }

    .xoo-wsc-container 
    {
        background: transparent;
        position: static;
        left: initial;
        max-width: initial;
        top: initial;
        width: 100%;
    }

    .xoo-wsc-body
    {
        max-height: 400px;
        overflow-y: auto;
    }

    .six_cart_popup_inner_wrapper .xoo-wscb-count
    {
        display: none;
    }

    .xoo-wscb-count
    {
        position: absolute;
        top: 0;
        right: 5px;
        left: initial;
        bottom: initial;
        background-color: #FEC4C7;
        height: initial;
        line-height: initial;
        /* padding: 3px 5px; */
        font-size: 9px;
        border-radius: 50%;
    }

    .xoo-wsc-sc-cont
    {
        position: absolute;
        top: -5px;
        right: 5px;
        left: initial;
        bottom: initial;
    }

    .xoo-wsc-cart-trigger
    {
        background-color: #FEC4C7;
        height: initial;
        line-height: initial;
        /* padding: 5px 6px; */
        font-size: 9px;
        border-radius: 50%;
        box-shadow: 2px 2px 2px 0px #6868681A;
        width: 18px;
        height: 18px;
        position: relative;
    }

    .xoo-wsc-cart-trigger > span.xoo-wsc-sc-count
    {
        font-size: 9px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        padding-top: 1px;
    }

    span.xoo-wsc-sc-subt { display: none; }
    span.xoo-wsc-sc-bki { display: none; }

    .xoo-wsc-icon-trash:before
    {
        font-size: 20px;
    }

    .xoo-wsc-smr-del.xoo-wsc-icon-trash
    {
        position: absolute;
        top: 50%;
        z-index: 999999;
        transform: translateY(-50%);
        right: 10px;
        padding: 20px;
    }

    .xoo-wsc-product 
    {
        position: relative;
    }

    .fb_dialog_content > iframe:first-child
    {
        bottom: 90px !important;
    }
</style>