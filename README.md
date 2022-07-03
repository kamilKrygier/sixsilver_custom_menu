# sixsilver_custom_menu
Custom wordpress nav menu separate for mobile and desktop

Navigation can be seen at: [sixsilver.pl](https://sixsilver.pl/)

## Few important things
1. There was an a problem with loading stylesheets and that is why I used include_once instead wp_enqueue_style() at desktop.php and mobile.php. Style was loading after content. It was little but noticeable issue, so I had to fix it. 
2. Enable facebook messenger only at contact page: if(!is_page(30415))add_filter('wc_facebook_is_messenger_enabled', 'no');. ID 30415 is my contact page ID.
3. Most of those URLs will break after domain or path change. I know my fault. I found it that I could do it much better after I did it. That will be fixed in future.
4. "[fibosearch]" is shortcode from [fibosearch plugin](https://fibosearch.com/)
5. Other used plugin:
* [side cart plugin](https://xootix.com/plugins/side-cart-for-woocommerce/)
* [Woocommerce filter plugin](https://products-filter.com/)