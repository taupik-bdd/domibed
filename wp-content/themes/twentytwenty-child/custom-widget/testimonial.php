<?php

namespace Elementor;

class Testimonial extends Widget_Base
{

    public function get_name()
    {
        return 'Testimonial';
    }

    public function get_title()
    {
        return 'Testimonial';
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
                        'name' => 'media',
                        'label' => __('Media', 'elementor'),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src()
                        ]
                    ],
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
            .sale-container {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 517px;
                padding: 0 1em;
                font-family: 'Quicksand';
                background-color: #F8F8F8;
            }

            .sale-container-inner {
                max-width: 1130px;
                width: 100%;
                min-height: 100px;
                display: flex;
            }

            .sale-content {
                width: 40%;
                height: 100%;
                padding-right: 10%;
            }

            .sale-content-items {
                width: 70%;
                height: 265px;
                display: flex;
                position: absolute;
                right: -5vw;
            }

            .sale-content-title {
                font-size: 16px;
            }

            .sale-content-box-content {
                display: flex;
                flex-direction: column;
            }

            .sale-content-heading {
                color: #262626;
                font-size: 42px;
                font-weight: 700;
            }

            .sale-content-description {
                color: #262626;
                font-size: 16px;
                font-weight: 500;
                margin-top: 10px;
            }

            .testimoni-box-items {
                display: flex;
                width: 330px;
                height: 210px;
                background-color: #FDF1EB;
                margin-right: 20px;
                position: relative;
                border-radius: 6px;
                justify-content: center;
                align-items: center;
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

            .testomoni-carousel-content {
                width: 50%;
                height: 50%;
                object-fit: cover;
                display: flex;
                justify-content: center;
                align-items: center;

            }

            @media only screen and (max-width: 1200px) {
                .sale-container-inner {
                    padding: 0 4em;
                }

                /* .sale-content-heading {
                    font-size: 12px;
                }

                .sale-content-description {
                    font-size: 38px;
                } */

                .testimoni-box-items {
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
        <div class="sale-container">
            <div class="sale-container-inner">
                <div class="sale-content ">
                    <div class="sale-content-box-content">
                        <div class="sale-content-heading">
                            <!-- <?php echo $settings['heading']; ?> -->
                            Save up to <span class="color-primary">50% </span> Now!
                        </div>
                        <div class="sale-content-description"> <?php echo $settings['Description']; ?></div>
                    </div>
                    <div class="carousel-text-box-button">>
                    </div>
                </div>
                <div class="carouselna-sale sale-content-items">
                    <?php foreach ($settings['list'] as $key => $value) : ?>
                        <div class="testimoni-box-items">
                            <img class="testomoni-carousel-content" src="<?= $value['media']['url']; ?>">
                        </div>
                        <!-- <div class="product-carousel-text">
                            <div class="product-carousel-text-name">Domi Topper AIR</div>
                            <div class="product-carousel-text-category">Topper</div>
                            <div class="product-carousel-text-price">Rp.300.000</div>
                        </div> -->
                    <?php endforeach ?>
                </div>
            </div>
            <script>
                jQuery(document).ready(function() {
                    jQuery(".carouselna-sale").slick({
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
