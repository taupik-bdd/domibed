<?php

namespace Elementor;

class Sale extends Widget_Base
{

    public function get_name()
    {
        return 'Sale';
    }

    public function get_title()
    {
        return 'Sale';
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

        $this->add_control(
            'heading',
            [
                'name' => 'heading',
                'label' => __('Heading', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Heading', 'elementor')
            ]
        );
        $this->add_control(
            'Description',
            [
                'name' => 'description',
                'label' => __('Description', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Description', 'elementor')
            ]
        );




        $this->add_control(
            'list',
            [
                'label' => __('List', 'elementor'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'name',
                        'label' => __('name', 'elementor'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'placeholder' => __('name', 'elementor')
                    ],
                    [
                        'name' => 'text-testimoni',
                        'label' => __('text testimoni', 'elementor'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'placeholder' => __('testimoni', 'elementor')
                    ],
                ]
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
            .testimoni-container {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 517px;
                padding: 0 1em;
                font-family: 'Quicksand';
            }

            .testimoni-container-inner {
                max-width: 1130px;
                width: 100%;
                min-height: 100px;
                display: flex;
            }

            .testimoni-content {
                width: 40%;
                height: 100%;
                padding-right: 10%;
            }

            .testimoni-content-items {
                width: 70%;
                height: 265px;
                display: flex;
                position: absolute;
                right: -5vw;
            }

            .testimoni-content-title {
                font-size: 16px;
            }

            .testimoni-content-box-content {
                display: flex;
                flex-direction: column;
            }

            .testimoni-content-heading {
                color: #fff;
                font-size: 16px;
                font-weight: 700;
            }

            .testimoni-content-description {
                color: #fff;
                font-size: 42px;
                font-weight: 700;
                margin-top: 10px;
            }

            .testimonial-box-items {
                display: flex;
                flex-direction: column;
                width: 330px;
                height: 265px;
                padding: 30px;
                background-color: #fff;
                margin-right: 20px;
                justify-content: space-between;
                position: relative;
            }

            .testimonial-item-name {
                font-size: 16px;
                font-weight: 600;
                color: #838383;
                position: absolute;
                bottom: 30px;
            }

            .testimonial-item-testimoni {
                font-size: 16px;
                font-weight: 600;
                display: flex;
                color: #373737;

            }

            .slick-nav-testimonial-carousel {
                display: flex;
                width: 95px;
                margin-top: 10px;
                justify-content: space-between;
            }

            .navigation-testimonial-carousel {
                font-size: 20px;
                color: #fff;
                width: 44px;
                height: 44px;
                cursor: pointer;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 22px;

            }

            @media only screen and (max-width: 1200px) {
                .testimoni-container-inner {
                    padding: 0 4em;
                }

                .testimoni-content-heading {
                    font-size: 12px;
                }

                .testimoni-content-description {
                    font-size: 38px;
                }

                .testimonial-box-items {
                    height: 190px;
                    padding: 20px;
                }

                .testimonial-item-name {
                    font-size: 12px;
                }

                .testimonial-item-testimoni {
                    font-size: 12px;
                }
            }

            @media only screen and (max-width: 800px) {}
        </style>
        <div class="testimoni-container bg-primary">
            <div class="testimoni-container-inner">
                <div class="testimoni-content ">
                    <div class="testimoni-content-box-content">
                        <div class="testimoni-content-heading"><?php echo $settings['heading']; ?></div>
                        <div class="testimoni-content-description"> <?php echo $settings['Description']; ?></div>
                    </div>
                    <div class="slick-nav-testimonial-carousel">
                        <div class=" prev-testimoni bg-secoundary navigation-testimonial-carousel">
                            <i class="fa fa-chevron-left "></i>
                        </div>
                        <div class="next-testimoni bg-secoundary navigation-testimonial-carousel">
                            <i class="fa fa-chevron-right "></i>
                        </div>
                    </div>
                </div>
                <div class="carouselna-testimoni testimoni-content-items">
                    <?php foreach ($settings['list'] as $key => $value) : ?>
                        <div class="testimonial-box-items">
                            <div class="testimonial-item-testimoni"><?= $value['text-testimoni']; ?></div>
                            <div class="testimonial-item-name"><?= $value['name']; ?> </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <script>
                jQuery(document).ready(function() {
                    jQuery(".carouselna-testimoni").slick({
                        autoplay: false,
                        dots: false,
                        slidesToShow: 3,
                        nextArrow: jQuery(".next-testimoni"),
                        prevArrow: jQuery(".prev-testimoni"),
                    });
                })
            </script>
    <?php
    }

    protected function _content_template()
    {
    }
}
