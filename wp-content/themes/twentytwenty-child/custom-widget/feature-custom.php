<?php

namespace Elementor;

class Feature_custom extends Widget_Base
{

    public function get_name()
    {
        return 'Feature_custom';
    }

    public function get_title()
    {
        return 'Feature Custom';
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
            ],
        );
        $this->add_control(
            'text-bold',
            [
                'name' => 'heading_block',
                'label' => __('Heading', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Text Bold', 'elementor')
            ],
        );
        $this->add_control(
            'text-description',
            [
                'name' => 'heading_block',
                'label' => __('Heading', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Text Description', 'elementor')
            ],
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
            .feature-custom {
                margin-top: -10em;
                font-family: 'Quicksand', sans-serif;
            }

            .feature-custom-gorup-title {
                width: 100%;
                display: flex;
                justify-content: center;
                text-align: center;
                flex-direction: column;

            }

            .feature-custom-title {
                font-size: 42px;
                font-weight: 700;
                font-family: 'Quicksand', sans-serif;
            }

            .feature-custom-description {
                font-size: 16px;
                font-weight: 500;
                font-family: 'Quicksand', sans-serif;
                display: flex;
                justify-content: center;
            }

            .feature-custom-description-items {
                max-width: 690px;
            }

            .feature-custom-gorup-items {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                margin-top: 75px;
            }

            .feature-custom-box-image {
                width: 32%;
                margin: 0.4%;
                margin-bottom: 50px;
                display: flex;
                align-items: center;
            }

            .feature-custom-image {
                height: 100px;
                width: 100px;
                object-fit: cover;
                max-width: 80px;
                min-height: 80px;
            }

            .feature-custom-box-content {
                display: flex;
                flex-direction: column;
                height: 80px;
                padding: 2px 20px;
                justify-content: space-between;


            }

            .feature-custom-content-title {
                font-size: 20px;
                font-weight: 600;
            }

            .feature-custom-content-description {
                font-size: 14px;
                font-weight: 500;
                color: #262626;
            }

            @media only screen and (max-width: 1200px) {
                .feature-custom-box-image {
                    width: 28%;
                    margin: 0.4%;
                    margin-bottom: 50px;
                    display: flex;
                    align-items: center;
                }
            }

            @media only screen and (max-width: 800px) {
                .feature-custom-title {
                    font-size: 3em;
                }

                .feature-custom-box-image {
                    width: 100%;
                    margin: 0;
                    margin-bottom: 20px;
                }
            }
        </style>
        <div class="feature-custom">
            <div class="feature-custom-gorup-title">
                <?php if ($settings['text'] != NULL) { ?>
                    <div class="feature-custom-title">
                        <?php echo $settings['text']; ?><span class="color-primary"><?php echo $settings['text-bold']; ?></span>
                    </div>
                    <div class="feature-custom-description">
                        <div class="feature-custom-description-items">
                            <?php echo $settings['text-description']; ?>
                        </div>

                    </div>
                <?php } ?>
            </div>
            <div class="feature-custom-gorup-items">
                <?php foreach ($settings['list'] as $key => $value) : ?>
                    <div class="feature-custom-box-image">
                        <img src="<?= $value['media']['url']; ?>" class="feature-custom-image">
                        <div class="feature-custom-box-content">
                            <div class="feature-custom-content-title"><?= $value['title_text']; ?></div>
                            <div class="feature-custom-content-description"><?= $value['textna']; ?></div>
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
