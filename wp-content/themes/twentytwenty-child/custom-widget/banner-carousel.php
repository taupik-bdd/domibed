<?php

namespace Elementor;

class Banner_carousel extends Widget_Base
{

    public function get_name()
    {
        return 'Banner_carousel';
    }

    public function get_title()
    {
        return 'Banner Carousel';
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
                'label' => __('Heading', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Type heading', 'elementor')
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
                        'name' => 'button_text',
                        'label' => __('Button Text', 'elementor'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'placeholder' => __('Learn more', 'elementor')
                    ],
                    [
                        'name' => 'title_text',
                        'label' => __('Title Text', 'elementor'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'placeholder' => __('Title', 'elementor')
                    ],
                    [
                        'name' => 'textna',
                        'label' => __('Image Text', 'elementor'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'placeholder' => __('Type Image Text', 'elementor')
                    ],
                    [
                        'name' => 'textna_color',
                        'label' => __('Image Text Color', 'elementor'),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .image-text' => 'color: {{VALUE}}',
                        ],
                    ],
                    [
                        'name' => 'link',
                        'label' => __('Link', 'elementor'),
                        'type' => \Elementor\Controls_Manager::URL,
                        'placeholder' => __('http://your-link.com/', 'elementor')
                    ],
                    [
                        'name' => 'link_color',
                        'label' => __('Link Color', 'elementor'),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .btn-carousel' => 'color: {{VALUE}}',
                        ],
                    ],
                    [
                        'name' => 'link_bg',
                        'label' => __('Background Button', 'elementor'),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .btn-carousel' => 'color: {{VALUE}}',
                        ],
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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <style>
            .custom-carousel-custom {}

            .banner-content-carousel {
                display: flex;
                justify-content: space-between;
                height: 100%;
                margin: 0 -1%;
                width: 102%;
            }

            .banner-content-carousel-image {
                width: 50%;
                height: 102%;
                max-height: 700px;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 1em 0 1em 2em;
                margin: 0 -1% -1.1% 0;
            }

            .banner-content-carousel-text {
                width: 50%;
                height: 100%;
                padding: 3em 11vw;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .carousel-text-description {
                position: relative !important;
                font-size: 16px;
                color: #fff;
                margin-top: 10px;
                font-family: 'Quicksand', sans-serif;
            }

            .carousel-text-title {
                font-size: 72px;
                color: #fff;
                line-height: 1em;
                font-family: 'Quicksand', sans-serif;
            }

            .carousel-text-box-button {
                margin-top: 30px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .carousel-text-button {
                position: relative !important;
                padding: 0 19px 0 5px;
                color: #fff;
                font-size: 16px;
                border-radius: 100px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: space-between;

            }

            .carousel-text-icon-button {
                width: 40px;
                height: 40px;
                border-radius: 20px;
                background-color: #fff;
                margin-right: 10px;
            }

            .slick-nav-banner-carousel {
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


            .navigation-banner-carousel {
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

            .carouselna .slick-dots li button {
                background-color: #f0f0f0;
                color: #f0f0f0;
                opacity: 0.5;
            }

            .carouselna .slick-dots li.slick-active button {
                width: 16px;
                height: 8px;
                background: #FFFFFF;
                border-radius: 100px;
                opacity: 1;
            }

            @media only screen and (max-width: 1200px) {
                .carousel-text-title {
                    font-size: 5em;
                }

                .carousel-text-description {
                    font-size: 1.5em;
                }
            }

            @media only screen and (max-width: 800px) {
                .banner-content-carousel {
                    flex-direction: column-reverse;
                }

                .banner-content-carousel-image {
                    width: 100%;
                }

                .banner-content-carousel-text {
                    width: 100%;
                    justify-content: flex-start;
                }

                .carousel-text-title {
                    font-size: 3em;
                }

                .carousel-text-description {
                    font-size: 1em;
                }

                .carousel-text-box-button {
                    margin-top: 4em;
                }
            }
        </style>
        <div class="custom-carousel custom-carousel-custom">
            <?php if ($settings['text'] != NULL) { ?>
                <div class="heading-block mb-5">
                    <?php echo $settings['text']; ?>
                </div>
            <?php } ?>

            <!-- <div class="slick-nav">

                <i class="fa-solid fa-chevron-left prev"></i>
                <i class="fa-solid fa-chevron-right next"></i>
            </div> -->
            <div class="slick-nav-banner-carousel">
                <div class=" carouselna-prev bg-secoundary navigation-banner-carousel">
                    <i class="fa fa-chevron-left "></i>
                </div>
                <div class="carouselna-next bg-secoundary navigation-banner-carousel">
                    <i class="fa fa-chevron-right "></i>
                </div>
            </div>
            <div class="carouselna" data-show_d="1" data-show_m="1">
                <?php foreach ($settings['list'] as $key => $value) : ?>
                    <div class="list-carousel">
                        <div class="content-carousel banner-content-carousel bg-primary">
                            <div class="banner-content-carousel-text">
                                <p class="carousel-text-title"><?= $value['title_text']; ?></p>
                                <p class="carousel-text-description" style="color: <?php echo esc_attr($value['textna_color']); ?>;"><?= $value['textna']; ?></p>
                                <?php if ($value['button_text'] != "") { ?>
                                    <div class="carousel-text-box-button">
                                        <a href="<?= $value['link']; ?>">
                                            <div class="carousel-text-button bg-secoundary">
                                                <div class="carousel-text-icon-button"></div>
                                                <?= $value['button_text']; ?>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="banner-content-carousel-image">
                                <img src="<?= $value['media']['url']; ?>">
                            </div>

                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
<?php
    }

    protected function _content_template()
    {
    }
}
