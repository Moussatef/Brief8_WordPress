<?php
/*
Plugin Name: footer Plugin
Description: add simple footer to your page.
Author: Moussatef 
Author URI: https://github.com/Moussatef
*/






defined('ABSPATH') or die('kill.');

class SfooterPlugin
{
    function __construct()
    {
        add_action('wp_footer', [$this, 'inject_content']);
        add_action('admin_menu', [$this, 'menu']);
        add_action('wp_footer', [$this, 'Fill_styles']);
    }


    function Fill_styles()
    {
        wp_enqueue_style('custom-login-style', plugins_url('style.css', __FILE__)); /// get css file
    }

    // inject content
    function inject_content()
    {
        $opt_website_name = get_option('sf_opt_wesite', 'Cosmetios');
        $opt_home_link  = get_option('sf_opt_text', 'home');
        $opt_email = get_option('sf_opt_email', 'otman.moussatef@gmail.com');
        $opt_desc = get_option('sf_opt_desc', 'desc');
        $opt_nav_1 = get_option('sf_opt_nav_1', 'Home');
        $opt_nav_2 = get_option('sf_opt_nav_2', 'Shop');
        $opt_nav_3 = get_option('sf_opt_nav_3', 'Contact');
        $opt_link_2 = get_option('sf_opt_link_2', 'shop-2');
        $opt_link_3 = get_option('sf_opt_link_3', 'contact');
        $opt_adrs = get_option('sf_opt_adrs', ' 200 Wher ipsum something');
        $opt_City = get_option('sf_opt_City', 'Safi');
        $opt_Country = get_option('sf_opt_Country', 'Mrocco');
        $opt_phone = get_option('sf_opt_phone', '+212 69856348');




        $date = date("Y");

        echo '
        <footer class="footer-distributed">
        
            <div class="footer-left">
            
                <h3> ' . $opt_website_name . ' <span> Word</span></h3>
                
                <p class="footer-links">
                    <a href="/">' . $opt_nav_1 . '</a>
                    |
                    <a href="' . $opt_link_2 . '">' . $opt_nav_2 . '</a>
                    |
                    <a href="' . $opt_link_3 . '">' . $opt_nav_3 . '</a>
                    
                </p>
                
                <p class="footer-company-name"> ' . $opt_website_name . ' &copy; ' . $date . '</p>
            </div>
            
            <div class="footer-center">
            
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span> ' . $opt_adrs . '</span> ' . $opt_City . ', ' . $opt_Country . '</p>
                </div>
                
                <div>
                    <i class="fa fa-phone"></i>
                    <p>' . $opt_phone . '</p>
                </div>
                
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">' . $opt_email . '</a></p>
                </div>
            
            </div>
            
            <div class="footer-right">
            
                <p class="footer-company-about">
                    <span>About the company</span>
                    ' . $opt_desc . '
                </p>
                
                <div class="footer-icons">
                
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                
                </div>
            
            </div>
        </footer>
        ';
    }


    // setttings page
    function settings()
    {
        echo "<h2>" . __('Footer Settings Config') . "</h2>";
        include_once('Sfooter_settings_page.php');
    }

    function menu()
    {
        add_menu_page(
            'SFooter Config',
            'SFooter',
            'manage_options',
            'SF_config',
            [$this, 'settings'],
            'dashicons-pets'
        );
    }
}

if (class_exists('SFooterPLugin')) {
    $Sf = new SFooterPlugin();
}
