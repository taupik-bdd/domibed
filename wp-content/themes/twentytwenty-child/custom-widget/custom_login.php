<?php

namespace Elementor;

class Custom_login extends Widget_Base
{

    public function get_name()
    {
        return 'custom_login';
    }

    public function get_title()
    {
        return 'Custom Login';
    }

    public function get_icon()
    {
        return 'eicon-slider-push';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'section_title',
            [
                'label' => __('Content', 'elementor'),
            ]
        );


        $this->end_controls_section();
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
?>
        <style>
            <?php include 'wp-content/themes/twentytwenty-child/style.css' ?>
        </style>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <style>
            .custom-login-wrapper {
                width: 100vw;
                height: 100vh;
                background-color: #E5E5E5;
                display: flex;
                justify-content: center;
                align-items: center;
                top: 0;
            }

            .custom-login-wrapper-inner {
                width: 510px;
                height: 619px;
                background: #E5E5E5;
                background: #FFFFFF;
                border: 1px solid #D7D7D7;
                border-radius: 10px;
            }

            @media only screen and (max-width: 1200px) {}

            @media only screen and (max-width: 800px) {}
        </style>
        <div class="custom-login-wrapper">
            <div class="custom-login-wrapper-inner">custom login</div>
        </div>
<?php
    }

    protected function _content_template()
    {
    }
}
