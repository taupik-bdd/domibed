<?php
class My_Elementor_Widgets
{
    protected static $instance = null;
    public static function get_instance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    protected function __construct()
    {
        require_once('custom-carousel.php');
        require_once('servicena.php');
        //require_once('js-widget.php');
        
        add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets']);
    }

    public function register_widgets()
    {
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\Custom_carousel());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\Servicena());

        //\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\Js_widget());

    }

    
}

add_action('init', 'my_elementor_init');

function my_elementor_init()
{
    My_Elementor_Widgets::get_instance();
}