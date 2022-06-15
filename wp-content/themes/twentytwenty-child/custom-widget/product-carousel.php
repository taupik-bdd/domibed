<?php

namespace Elementor;

class Product_carousel extends Widget_Base
{

    public function get_name()
    {
        return 'product_carousel';
    }

    public function get_title()
    {
        return 'Product Carousel';
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
            'text',
            [
                'name' => 'heading_block',
                'label' => __('Heading (not color)', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('heading', 'elementor')
            ]
        );
        $this->add_control(
            'text-color',
            [
                'name' => 'heading_block',
                'label' => __('Heading (color)', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('heading', 'elementor')
            ]
        );
        $this->add_control(
            'name',
            [
                'name' => 'heading_block',
                'label' => __('Name', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('name', 'elementor')
            ]
        );
        $this->add_control(
            'category',
            [
                'name' => 'heading_block',
                'label' => __('Category', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('category', 'elementor')
            ]
        );
        $this->add_control(
            'description',
            [
                'name' => 'heading_block',
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
                        'name' => 'textna',
                        'label' => __('Image Text', 'elementor'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'placeholder' => __('Type Image Text', 'elementor')
                    ],

                    [
                        'name' => 'link',
                        'label' => __('Link', 'elementor'),
                        'type' => \Elementor\Controls_Manager::URL,
                        'placeholder' => __('http://your-link.com/', 'elementor')
                    ],

                ]
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'content_typography',
                'label' => __('Text Image Font', 'elementor'),
                'selector' => '{{WRAPPER}} .image-text',
                'global' => [
                    'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_TEXT,
                ],
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
        <style>
            .product-carousel-wrapper {
                width: 100%;
                display: flex;
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 5em;
            }

            .product-carousel-wrapper-inner {
                width: 120%;
                left: -10%;
                height: 100%;
            }

            .product-carousel-group-content {
                position: relative;
                width: 100%;
                height: 100%;
            }

            .product-carousel-box {
                width: 330px;
                height: 210px;
                margin: 0 1em;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #FDF1EB;
                position: relative;
                border-radius: 6px;
            }

            .product-carousel-content {
                width: 50%;
                height: 50%;
                object-fit: cover;

            }

            .slick-nav-product-carousel {
                width: 100%;
                height: 100%;
                margin-top: -2em;
                position: absolute;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 4em;
                margin-top: -2em;
            }

            .navigation-product-carousel {
                font-size: 20px;
                color: #fff;
                z-index: 2;
                width: 44px;
                height: 44px;
                cursor: pointer;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 22px;
                margin-top: -50px;

            }

            .product-carousel-title {
                margin-bottom: 50px;
                font-family: 'Quicksand';
                font-size: 42px;
                font-weight: 700;
                width: 100%;
                text-align: center;
            }

            .product-list {
                background-color: red;
                display: flex;
            }

            .product-carousel-text {
                margin: 15px 0 0 1em;
                display: flex;
                flex-direction: column;
            }

            .product-carousel-text-name {
                font-size: 16px;
                font-weight: 600;
                color: #373737;
            }

            .product-carousel-text-category {
                font-size: 16px;
                font-weight: 600;
                color: #838383;
                margin-top: 2px;
            }

            .product-carousel-text-price {
                font-size: 18px;
                font-weight: 600;
                color: #33A595;
                margin-top: 2px;
            }

            .product-list-item {
                background-color: #33A595;
            }

            @media only screen and (max-width: 1200px) {

                .product-carousel-box {
                    width: 95%;
                    margin: 0 1em;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-color: #FDF1EB;
                    border-radius: 6px;
                }


                /* .product-carousel-wrapper-inner {
                    width: 100%;
                    right: -10%;
                }

                .product-carousel-content {
                    width: 100%;
                    height: 45%;
                } */
            }
        </style>
        <div class="product-carousel-title"> <?php echo $settings['text']; ?><span class="color-primary"> <?php echo $settings['text-color']; ?></span></div>
        <div class="slick-nav-product-carousel">
            <div class=" prev-product bg-secoundary navigation-product-carousel">
                <i class="fa fa-chevron-left "></i>
            </div>
            <div class="next-product bg-secoundary navigation-product-carousel">
                <i class="fa fa-chevron-right "></i>
            </div>
        </div>

        <div class="product-carousel-wrapper">
            <div class="carouselna-product product-carousel-wrapper-inner">
                <?php foreach ($settings['list'] as $key => $value) : ?>
                    <div class="product-carousel-group-content">
                        <div class="product-carousel-box">
                            <img class="product-carousel-content" src="<?= $value['media']['url']; ?>">
                        </div>
                        <div class="product-carousel-text">
                            <div class="product-carousel-text-name">Domi Topper AIR</div>
                            <div class="product-carousel-text-category">Topper</div>
                            <div class="product-carousel-text-price">Rp.300.000</div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <script>
            jQuery(document).ready(function() {
                jQuery(".carouselna-product").slick({
                    autoplay: false,
                    dots: false,
                    slidesToShow: 5,
                    nextArrow: jQuery(".next-product"),
                    prevArrow: jQuery(".prev-product"),
                });
            })
        </script>
<?php
    }

    protected function _content_template()
    {
    }
}
