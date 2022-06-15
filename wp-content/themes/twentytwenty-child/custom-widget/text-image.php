<?php

namespace Elementor;

class Text_image extends Widget_Base
{

    public function get_name()
    {
        return 'Text_image';
    }

    public function get_title()
    {
        return 'Text Image';
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
            'title',
            [
                'name' => 'title',
                'label' => __('Title', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Type heading', 'elementor')
            ]
        );
        $this->add_control(
            'title-color',
            [
                'name' => 'title',
                'label' => __('Title Color', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Type heading', 'elementor')
            ]
        );
        $this->add_control(
            'description',
            [
                'name' => 'title',
                'label' => __('Description', 'elementor'),
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
                        'name' => 'title',
                        'label' => __('Tttle', 'elementor'),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'placeholder' => __('Title', 'elementor')
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
            .text-image-container {
                display: flex;
                justify-content: center;
                width: 100%;
                height: 100%;
                position: relative;
                padding: 0 1em;
            }

            .text-image-container-inner {
                max-width: 1130px;
                width: 100%;
                min-height: 100px;
                display: flex;
            }

            .text-image-content {
                width: 40%;
                height: 100%;
                padding-right: 5vw;
                padding-left: 0.3em;
            }

            .text-image-box {
                width: 60%;
                height: 100%;
                position: absolute;
                right: -15vw;
            }

            .text-image-content-box {
                width: 100%;
                height: 100%;
                object-fit: cover;

            }

            .text-image-content-box-image {
                width: 100%;
                height: 100%;
            }

            .text-image-content-title {
                font-size: 4em;
                font-weight: 600;
                padding-right: 20%;
            }

            .text-image-content-description {
                font-size: 1.8em;
                margin-top: 2em;
            }

            .carouselna-text-image .slick-dots {
                display: flex;
                justify-content: start;
                margin: 0;
                padding: 1rem 0;
                list-style-type: none;
                position: absolute;
                left: 0;
                height: 30px;
                margin-left: -44.5vw;
                top: 33em;
            }

            .carouselna-text-image .slick-dots li button {
                border-color: #E5E5E5 !important;
                width: 50px;
                height: 4px;
                background: #E5E5E5;
                border-radius: 50px;
            }

            .carouselna-text-image .slick-dots li.slick-active button {
                border-color: #E99972 !important;
                width: 120px;
                height: 4px;
                background: #E99972;
                border-radius: 50px;
            }





            @media only screen and (max-width: 1200px) {

                .text-image-content {
                    padding-left: 4em;
                }

                .text-image-container {
                    padding: 0 4em;
                }

                .text-image-box {
                    right: -2vw;
                }

                .carouselna-text-image .slick-dots {
                    margin-left: -36vw;
                }

            }

            @media only screen and (max-width: 800px) {
                .text-image-container {
                    flex-direction: column-reverse;
                }

                .text-image-content {
                    width: 100%;
                    padding-right: 0;
                }

                .text-image-box {
                    width: 100%;
                }

                .text-image-content-title {
                    font-size: 3em;
                    padding-right: 0;
                }

                .text-image-content-description {
                    font-size: 1.5em;
                }
            }
        </style>
        <div class="text-image-container">
            <div class="text-image-container-inner">
                <div class="text-image-content ">
                    <?php if ($settings['title'] != NULL) { ?>
                        <div class="text-image-content-title">
                            <?php echo $settings['title']; ?> <span class="color-primary"><?php echo $settings['title-color']; ?></span>
                        </div>
                    <?php } ?>
                    <?php if ($settings['description'] != NULL) { ?>
                        <div class="text-image-content-description">
                            <?php echo $settings['description']; ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="text-image-box carouselna-text-image ">
                    <?php foreach ($settings['list'] as $key => $value) : ?>
                        <div class="text-image-content-box">
                            <img class="text-image-content-box-image" src="<?= $value['media']['url']; ?>">
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <script>
            jQuery(document).ready(function() {
                jQuery(".carouselna-text-image").slick({
                    autoplay: false,
                    dots: true,
                    slidesToShow: 1,
                    nextArrow: false,
                    prevArrow: false,
                });
            })
        </script>
<?php
    }

    protected function _content_template()
    {
    }
}
