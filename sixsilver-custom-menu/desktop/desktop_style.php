<style>
  #x-btn-widgetbar{display: none !important;}
  .menu-active{color: #fec4c7 !important;}

  html.disable_scroll 
  {
      height: calc(100vh - 105px);
      overflow: hidden;
  }

  .x-root
  {
      flex-direction: column;
      margin-top: 105px;
  }

  #six_navigation_wrapper
  {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      width: 100%;
      max-height: 105px;
      z-index: 9999;
  }

  .six_top_navigation_wrapper
  {
      background-color: #FFFFFF;
      height: 65px;
  }

  .six_top_navigation_wrapper a
  {
      color: #000000;
      font-size: 1em;
      font-weight: 400;
      letter-spacing: 0em;
      display: block;
  }

  .six_top_navigation_wrapper a:hover{color: #FEC4C7;}

  .six_top_navigation_wrapper,
  .top_menu_inner_wrapper,
  .top_menu_item_list,
  .top_menu_item.icon_wrapper,
  .top_menu_item_wrapper
  {
      display: flex;
      justify-content: center;
      list-style: none;
  }

  .six_top_navigation_wrapper .top_menu_item_list,
  .six_top_navigation_wrapper .top_menu_item_list .top_menu_item
  {
      margin: 0;
      position: relative;
  }
  
  .six_top_navigation_wrapper .top_menu_item a
  {
      padding: 0 15px;
      position: relative;
      top: 50%;
      transform: translateY(-50%);
      font-size: 16px;
      display: block; 
      margin: 0;
  }

  .six_top_navigation_wrapper .top_menu_item .cart{margin: 0;}

  .six_top_navigation_wrapper .top_menu_item .account i
  {
      font-size: 20px;
      display: block; 
      margin: 0;
  }

  .six_top_navigation_wrapper .top_menu_item .cart i,
  .six_top_navigation_wrapper .top_menu_item .search i
  {
      padding: 0 15px;
      position: relative;
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px;
      display: block; 
      margin: 0; 
      cursor: pointer;
  }

  .six_top_navigation_wrapper .top_menu_item a i
  {
      font-size: 20px;
  }

  .six_top_navigation_wrapper .top_menu_item_wrapper.center img
  {
      height: auto;
      padding: 5px 20px;
      max-width: 300px;
      position: relative;
      top: 50%;
      transform: translateY(-50%);
  }

  .six_navigation_wrapper
  {
      background-color: #fec4c7;
      height: 40px;
      padding: 0 10%;
  }

  .masthead{display: none !important;}

  .menu-toggle-wrapper
  {
    display: flex;
    justify-content: center;
    max-height: 100%;
  }

  .menu-toggle-wrapper > .menu-toggle-item
  {
      padding: 0 10px;
  }

  .menu-toggle-wrapper > .menu-toggle-item > a
  {
    display: block;
    width: 100%;
    height: 100%;
    padding: 8px 20px;
    color: #FFFFFF;
    transition: .2s ease-in-out;
    text-align: center;
  }

  .menu-toggle-wrapper .menu-toggle-item a:hover:first-child
  {
    color: #f0f0f0;
    border-color: #f0f0f0 !important;
    transition: .2s ease-in-out;
  }

  .menu-toggle-wrapper .menu-toggle-item a:hover
  {
    color: #f0f0f0;
    transition: .2s ease-in-out;
  }

  .menu-wrapper
  {
    -webkit-box-shadow: 8px 8px 24px 0px rgba(66, 68, 90, .15);
    -moz-box-shadow: 8px 8px 24px 0px rgba(66, 68, 90, .15);
    box-shadow: 8px 8px 24px 0px rgba(66, 68, 90, .15);
    position: absolute;
    top: 105px;
    left: 50%;
    z-index: 0;
    background-color: #FFF;
    padding: 35px 35px;
    transform: translateX(-50%);
    width: 90%;
    margin: 0;
    display: none;
    z-index: 9;
    border-radius: 8px;
  }

  .menu-wrapper h6
  {
    font-size: 18px;
    margin-bottom: 15px;
  }

  .submenu-item-wrapper
  {
    margin-bottom: 0;
  }

  .submenu-item-wrapper .menu-item
  {
    list-style: none;
    padding: 0 0 15px 0;
    text-align: left;
  }

  .submenu-item-wrapper .menu-item a
  {
    font-size: 1.15em;
    color: #424242;
  }

  .submenu-item-wrapper .menu-item img
  {
    max-width: 27px
  }

  .menu-wrapper.marki-modowe > .marki-wrapper
  {
    width: 100%;
    height: 100%;
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    grid-template-rows: repeat(4, calc(100vw / 16));
    grid-gap: 0.5rem 0.5rem;
  }

  .menu-wrapper.marki-modowe > .marki-wrapper > .marki-tile
  {
    justify-self: auto;
    align-self: auto;
    z-index: 1;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    -webkit-box-shadow: 1px 1px 3px 2px rgba(66, 68, 90, 0.15);
    -moz-box-shadow: 1px 1px 3px 2px rgba(66, 68, 90, 0.15);
    box-shadow: 1px 1px 3px 2px rgba(66, 68, 90, 0.15);
    border-radius: 6px;
  }

  .menu-wrapper.marki-modowe > .marki-wrapper > .marki-tile > a
  {
    position: relative;
    display: block;
    width: 100%;
    height: 100%;
  }

  .menu-wrapper.marki-modowe > .marki-wrapper > .marki-tile:hover
  {
    transition: .2s ease-in-out;
    transform: scale(1.03);
    filter: brightness(.9);
  }

  .menu-wrapper.marki-modowe > .marki-wrapper > .marki-tile > a > img
  {
    max-height: 80%;
    max-width: 80%;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    transition: .2s ease-in-out;
  }

  .six_search_popup
  {
      width: 100vw;
      height: calc(100vh - 105px);
      padding: 20px !important;
      position: fixed;
      padding: 20px;
      top: 105px;
      left: 0;
      z-index: 99999;
      background-color: rgb( 148 148 148 / 85%);
      display: none;
  }

  .six_search_popup > .six_search_popup_inner_wrapper
  {
      width: 50%;
      min-height: 200px;
      border-radius: 8px;
      background-color: #FFFFFF;
      padding: 25px;
      position: relative;
      top: 50%;
      transform: translateY(-50%);
      margin: 0 auto;
  }

  .xoo-wsch-close.xoo-wsc-icon-cross
  {
      font-size: 30px;
      margin-top: 10px;
  }

  .single-post .x-sidebar
  {
      margin-top: 105px !important;
      max-height: calc(100vh - 105px) !important; 
  }
</style>